FROM trafex/php-nginx:2.6.0

ADD *.php /var/www/html/
ADD *.ico /var/www/html/
ADD css/* /var/www/html/css/
ADD js/* /var/www/html/js/