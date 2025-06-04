# Use official PHP image with PHP 8.1 and FPM
FROM php:8.1-fpm

# Install system dependencies and PHP extensions required by Laravel
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libzip-dev \
    unzip \
    zip \
    libonig-dev \
    libxml2-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql zip mbstring exif pcntl bcmath gd

# Install Composer globally (dependency manager for PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory inside the container
WORKDIR /var/www/html

# Copy all files from your project to the container
COPY . /var/www/html

# Install PHP dependencies via Composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Generate Laravel application key (needed for security)
RUN php artisan key:generate

# Expose port 8000 to outside world
EXPOSE 8000

# Start Laravel development server on container start
CMD php artisan serve --host=0.0.0.0 --port=8000
