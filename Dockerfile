FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    nano \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    && docker-php-ext-install pdo pdo_mysql zip gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader || true

COPY . .

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache

RUN service apache2 restart

RUN composer install

RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

EXPOSE 80

CMD ["apache2-foreground"]