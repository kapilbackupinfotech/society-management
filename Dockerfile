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

WORKDIR /app

COPY . .

RUN composer install --ignore-platform-reqs --no-dev --optimize-autoloader

RUN npm install
RUN npm run build

RUN php artisan config:clear || true
RUN php artisan cache:clear || true
RUN php artisan view:clear || true

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000