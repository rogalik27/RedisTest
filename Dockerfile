FROM php:apache 

RUN docker-php-ext-install mysqli

COPY ./public/ /var/www/html/
