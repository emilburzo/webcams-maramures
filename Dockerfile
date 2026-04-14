FROM php:8.3-cli-alpine AS build
WORKDIR /src
COPY index.php functions.php ./
RUN php index.php > index.html

FROM nginxinc/nginx-unprivileged:1.27-alpine-slim
COPY --from=build /src/index.html /usr/share/nginx/html/index.html
COPY css/ /usr/share/nginx/html/css/
COPY js/ /usr/share/nginx/html/js/
COPY favicon.ico /usr/share/nginx/html/favicon.ico
COPY nginx.conf /etc/nginx/conf.d/default.conf
EXPOSE 8080
