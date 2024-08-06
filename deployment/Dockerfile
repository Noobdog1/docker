FROM php:7.1-apache


RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-configure pdo_mysql && docker-php-ext-configure mysqli && docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

EXPOSE 80