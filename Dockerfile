FROM php:8.0-apache

WORKDIR /var/www/html

COPY source-code/* /var/www/html

RUN apt-get update && apt-get install -y default-mysql-client

RUN apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip mysqli pdo_mysql \
    && a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]
