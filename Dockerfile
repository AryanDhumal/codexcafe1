FROM php:8.2-apache

# Enable required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy .env example and set app key
RUN cp .env.example .env && php artisan key:generate

# Make storage writable
RUN chmod -R 777 storage bootstrap/cache

# Expose port 80
EXPOSE 80
