FROM php:7.1.8-apache

# Setup apache host
COPY sites/krypton.conf /etc/apache2/sites-available/000-default.conf

# Additional php.ini settings
COPY php-docker.ini /usr/local/etc/php/conf.d

RUN printf "deb http://archive.debian.org/debian/ jessie main\ndeb-src http://archive.debian.org/debian/ jessie main\ndeb http://security.debian.org jessie/updates main\ndeb-src http://security.debian.org jessie/updates main" > /etc/apt/sources.list

RUN apt-get update && apt-get install -y libmcrypt-dev \
    mysql-client libmagickwand-dev --no-install-recommends \
    && docker-php-ext-install mcrypt pdo_mysql

# Install xdebug
RUN pecl install xdebug

RUN a2enmod rewrite