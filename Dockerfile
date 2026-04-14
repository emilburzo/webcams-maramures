FROM trafex/php-nginx:2.6.0

COPY *.php /var/www/html/
COPY *.ico /var/www/html/
COPY css/ /var/www/html/css/
COPY js/ /var/www/html/js/
