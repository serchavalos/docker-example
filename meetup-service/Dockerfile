FROM php:7.0.2-fpm

RUN docker-php-ext-install pdo pdo_mysql

# Install phpunit
RUN apt-get update && apt-get install -y -f phpunit

COPY php/php.ini /usr/local/etc/php/

WORKDIR /usr/share/nginx/html/

CMD ["php-fpm"]
