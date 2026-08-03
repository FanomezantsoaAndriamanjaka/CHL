FROM php:8.2-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install zip pdo pdo_pgsql

RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash -
RUN apt-get install -y nodejs

COPY . .

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader

RUN npm install
RUN npm run build

RUN php artisan storage:link || true
RUN chmod -R 775 storage bootstrap/cache

RUN php artisan config:clear || true
RUN php artisan cache:clear || true
CMD php artisan optimize:clear && php artisan migrate --force && php artisan db:seed --force && php artisan serve --host=0.0.0.0 --port=8000
RUN php artisan optimize:clear

EXPOSE 8000

CMD php artisan migrate --force && php artisan db:seed --force && php artisan serve --host=0.0.0.0 --port=8000