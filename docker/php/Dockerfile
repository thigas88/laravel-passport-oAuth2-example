FROM php:8.1-apache

WORKDIR /var/www/html/

RUN apt-get -y update
RUN apt-get -y install git zlib1g-dev libzip-dev zip 

# Install Mysql
RUN docker-php-ext-install mysqli pdo_mysql

RUN docker-php-ext-enable mysqli pdo_mysql

RUN docker-php-ext-install exif

RUN docker-php-ext-install zip

RUN docker-php-ext-install bcmath

# libpng-dev zlib1g-dev zlib1g
RUN apt-get update && \
apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && \
docker-php-ext-install gd

# RUN docker-php-ext-install gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

RUN a2enmod rewrite
