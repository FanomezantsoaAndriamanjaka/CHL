FROM php:8.2-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install zip pdo pdo_pgsql

COPY . .

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader

# Mamorona dossier Laravel ilaina
RUN mkdir -p storage/framework/{cache,sessions,views} \
    && mkdir -p bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

RUN php artisan storage:link || true

RUN php artisan migrate --force || true

RUN php artisan config:clear
RUN php artisan cache:clear
RUN php artisan view:clear

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000