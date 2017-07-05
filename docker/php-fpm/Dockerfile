FROM php:7.0-fpm

RUN useradd -ms /bin/bash vagrant

USER vagrant
COPY php-fpm.conf /usr/local/etc/php-fpm.conf

WORKDIR /app
