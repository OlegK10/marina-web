FROM composer:2 as composer
FROM php:8.5-fpm
#  Změnit na alpine
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libxml2-dev \
    libpng-dev \
    libonig-dev \
    zip \
    unzip

RUN apt-get update; \
    apt-get install -y libmagickwand-dev; \
    pecl install imagick; \
    docker-php-ext-enable imagick;
    
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN pecl install xlswriter && docker-php-ext-enable xlswriter

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

CMD ["php-fpm"]

COPY . /var/www/html
