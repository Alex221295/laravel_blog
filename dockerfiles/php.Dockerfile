FROM php:8.2-fpm-alpine

WORKDIR /var/www/laravel

RUN docker-php-ext-install pdo pdo_mysql
RUN apk add --update nodejs npm

