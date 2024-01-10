FROM php:8.2-fpm

WORKDIR /var/www/html
# Arguments defined in docker-compose.yml
# ARG user
# ARG uid

ARG uid=1000
ARG user=myuser
# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip
# Install dockerize
# RUN apt-get update && apt-get install -y dockerize
# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#Create system user to run Composer and Artisan Commands

RUN useradd -G www-data,root -u 1000 -d /home/myuser myuser

USER myuser

