# Используем официальный образ PHP
FROM php:8.2.17-fpm

# Install any dependencies or packages you need
RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copy your custom php.ini file
COPY ./docker/app/php.ini /usr/local/etc/php/conf.d/php.ini

# Install Composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

WORKDIR /var/www
