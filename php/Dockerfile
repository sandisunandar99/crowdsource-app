FROM php:7-fpm

ADD ./php.ini /usr/local/etc/php/conf.d/php.ini
ADD ./public /var/www/html/public

RUN chmod -R 777 /var/www/html/public/tmp
RUN chmod -R 777 /var/www/html/public/upload
RUN chmod -R 777 /var/www/html/public/application/config

WORKDIR /var/www/html