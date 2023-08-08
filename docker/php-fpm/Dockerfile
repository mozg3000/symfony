FROM php:8.1-fpm-alpine

ENV XDEBUG_VERSION 3.0.3

RUN apk add --no-cache fcgi
RUN docker-php-ext-install pdo pdo_mysql


RUN apk add --no-cache pcre-dev $PHPIZE_DEPS \
        && pecl install redis \
        && docker-php-ext-enable redis.so

RUN apk add --update linux-headers
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN mv $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini

COPY ./php-fpm/conf.d /usr/local/etc/php/conf.d


WORKDIR /app
