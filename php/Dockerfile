FROM php:7-fpm

# install and enable pdo_mysql module
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

# install composer
RUN cd ~
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN ln -s /usr/local/bin/composer /usr/bin/composer

# add source code and config files
ADD ./php.ini /usr/local/etc/php/php.ini
ADD ./public /var/www/html/public

# set file permission
RUN chmod -R 777 /var/www/html/public/assets
RUN chmod -R 777 /var/www/html/public/tmp
RUN chmod -R 777 /var/www/html/public/upload
RUN chmod -R 777 /var/www/html/public/application/config

# set working directory
WORKDIR /var/www/html/public

# install dependencies via composer
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev
RUN docker-php-ext-install zip
RUN composer update