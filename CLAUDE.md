# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project

Single-page site at `webcam.maramures.io` that embeds live webcam feeds from the Maramureș region of Romania (ski slopes, mountain peaks, cities). No database. PHP is used only as a *templating language at build time* — the runtime container has no PHP. The runtime is nginx serving static HTML + CSS + JS, plus a reverse-proxy location (`/LiveApp/`) that header-spoofs upstream cam providers so they pass CORS.

## Architecture

- `index.php` — the only page (source). Lists every webcam as a `<div class="cam">`. Each cam either:
  - calls `hls_cam($id, $title, $m3u8)` from `functions.php` to embed an HLS stream in a native `<video>` (via hls.js, or Safari's built-in HLS), or
  - inlines an `<img>` / `<iframe>` directly (for MJPEG streams or external embed providers like YouTube/rtsp.me).
- `functions.php` — defines `hls_cam()`. The generated player has an `error` handler that hides its wrapper `<div>` when the stream fails, so dead cams disappear from the page automatically. The inline `<img>` cams achieve the same effect via `onerror`.
- `nginx.conf` — runtime server config. Serves static assets and reverse-proxies `/LiveApp/` to `live.freecam.ro:5443` with spoofed `Host`/`Referer`/`Origin` headers and rewritten CORS. Copied into `/etc/nginx/conf.d/default.conf` in the final image.
- `js/hls.min.js` — vendored hls.js (MIT). Loaded once at the bottom of the page.
- `css/style.css` — layout for the grid of cam tiles.

Adding a webcam = one new line in `index.php`. No registry, no config file.

## Build

Multi-stage `Dockerfile`:
1. `php:8.3-cli-alpine` renders `index.php` → `index.html` (one `php index.php > index.html` invocation).
2. `nginxinc/nginx-unprivileged:1.27-alpine-slim` receives the rendered HTML, CSS, JS, favicon, and `nginx.conf`. Final image is ~20 MB, runs as non-root, listens on 8080.

## Deploy

- Pushing to `master` triggers `.github/workflows/docker.yml`, which builds a multi-arch image and pushes `ghcr.io/emilburzo/webcams-maramures:{latest,<run_number>,<short_sha>}` to GitHub Container Registry (authenticated via `GITHUB_TOKEN`).
- `.ci/deploy.sh` substitutes the current `SHORT_SHA` into `.ci/deploy.yaml` and `kubectl apply`s the Deployment/Service/Ingress for host `webcam.maramures.io`. Run this manually after the image build completes.

## Local development

There is no test suite or linter. `Vagrantfile` is a symlink to a personal template outside the repo.

Two ways to preview:
- **Quick edit loop**: `php -S localhost:8080` — edits to `.php` reflect on reload, but the `/LiveApp/` proxy is absent, so Cavnic/Izvoare HLS cams won't load.
- **Full fidelity**: `docker build -t webcams . && docker run --rm -p 8080:8080 webcams` — matches production, includes the reverse-proxy.

## Gotchas

- **HLS.js must be tried before `canPlayType('application/vnd.apple.mpegurl')`.** Chromium 147+ shipped experimental built-in HLS support, so that `canPlayType` check is no longer a "Safari-only" signal — it now returns `"maybe"` in Chrome too. If the native branch runs first, Chromium's demuxer fails on these freecam.ro streams (`DEMUXER_ERROR_COULD_NOT_PARSE`) and silently retries the playlist ~30×/s without ever firing a `<video>` `error` event, so the wrapper never hides. Order in `functions.php` is `Hls.isSupported()` → `canPlayType` → `hide()`. Do not flip it back.
- **The Igniș YouTube iframe points at `https://ignis.maramures.io/player`, not `/embed/live_stream?channel=…`.** Since October 2026 YouTube intermittently answers the `live_stream` embed with an empty player (`"PLAYER_VARS":{}` in the embed HTML: no video id, not even autoplay), shown as a bare red play button that says "An error occurred" on click. On 2026-10-09: 12/30 raw fetches and 6/20 Chrome page loads; through `/player`, 20/20. Embedding by video id doesn't fail, but this site is static and can't look the live id up, so it borrows the ignis.maramures.io app's `/player`, which 302s to `https://www.youtube.com/embed/<live id>?autoplay=1&mute=1` (and to `live_stream` itself when it can't resolve an id). Because `src` is ignis's origin, every `allow` entry must name `https://www.youtube.com`: a bare entry delegates only to the `src` origin, so after the redirect YouTube's frame loses all of them (measured in Chrome 155: only fullscreen survives, via `allowfullscreen`). Muted autoplay keeps working anyway, which hides the breakage.
