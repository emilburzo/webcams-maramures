# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project

Single-page PHP site at `webcam.maramures.io` that embeds live webcam feeds from the Maramureș region of Romania (ski slopes, mountain peaks, cities). No database, no build step — PHP renders a static-ish HTML page that loads HLS streams, MJPEG snapshots, and third-party iframes.

## Architecture

- `index.php` — the only page. Lists every webcam as a `<div class="cam">`. Each cam either:
  - calls `hls_cam($id, $title, $m3u8)` from `functions.php` to embed an HLS stream in a native `<video>` (via hls.js, or Safari's built-in HLS), or
  - inlines an `<img>` / `<iframe>` directly (for MJPEG streams or external embed providers like YouTube/rtsp.me).
- `functions.php` — defines `hls_cam()`. The generated player has an `error` handler that hides its wrapper `<div>` when the stream fails, so dead cams disappear from the page automatically. The inline `<img>` cams achieve the same effect via `onerror`.
- `js/hls.min.js` — vendored hls.js (MIT). Loaded once at the bottom of `index.php`.
- `css/style.css` — layout for the grid of cam tiles.
- Some `hls_cam()` calls use root-relative `/LiveApp/streams/...` URLs; those are served by an upstream (not this repo) proxied/co-hosted at the same origin in production.

Adding a webcam = one new line in `index.php`. No registry, no config file.

## Deploy

- Pushing to `master` triggers `.github/workflows/docker.yml`, which builds a multi-arch image and pushes `emilburzo/webcams-maramures:{latest,<run_number>,<short_sha>}` to Docker Hub.
- `.ci/deploy.sh` substitutes the current `SHORT_SHA` into `.ci/deploy.yaml` and `kubectl apply`s the Deployment/Service/Ingress for host `webcam.maramures.io`. Run this manually after the image build completes.
- The container image (`trafex/php-nginx`) serves on port 8080.

## Local development

There is no test suite, linter, or build. `Vagrantfile` is a symlink to a personal template outside the repo. To preview locally, run any PHP-capable server from the repo root, e.g. `php -S localhost:8080`, or build and run the Dockerfile.
