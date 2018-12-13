FROM php:7.2.10-fpm

RUN docker-php-ext-install pdo_mysql
