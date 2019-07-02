FROM php:7.2-fpm
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev \
 && docker-php-ext-install gd mysqli pdo_mysql zip bcmath opcache

COPY redis-4.2.0.tgz /home/redis.tgz

RUN pecl install /home/redis.tgz

RUN rm -rf /home/redis.tgz

COPY ./config/php.ini /usr/local/etc/php/conf.d/php.ini
