FROM php:8.2-cli

WORKDIR /var/www/html


# Installation PHP dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    libpq-dev \
    nodejs \
    npm \
    && docker-php-ext-install zip pdo pdo_pgsql


# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


# Copy project
COPY . .


# Install PHP packages
RUN composer install --no-dev --optimize-autoloader


# Install JS packages and build Vite
RUN npm install
RUN npm run build


# Laravel setup
RUN php artisan storage:link || true

RUN php artisan config:clear || true
RUN php artisan cache:clear || true


# Permissions
RUN chmod -R 775 storage bootstrap/cache


EXPOSE 8000


CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000