FROM php:7-fpm

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

ADD ./php.ini /usr/local/etc/php/php.ini
ADD ./public /var/www/html/public

RUN chmod -R 777 /var/www/html/public/tmp
RUN chmod -R 777 /var/www/html/public/upload
RUN chmod -R 777 /var/www/html/public/application/config

WORKDIR /var/www/html