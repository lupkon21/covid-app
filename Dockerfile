FROM php:8.1.10-apache

COPY . /var/www/html/

RUN chown -R www-data:www-data temp/