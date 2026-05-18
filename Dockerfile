FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpq-dev \
    zip \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_pgsql pgsql

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . /var/www

RUN composer install --ignore-platform-reqs --no-dev --optimize-autoloader

RUN npm install
RUN npm run build

RUN php artisan optimize:clear || true

EXPOSE 10000

CMD php artisan migrate --force && php artisan storage:link && php artisan serve --host=0.0.0.0 --port=10000