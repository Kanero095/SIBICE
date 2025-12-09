# Gunakan PHP 8.2 dengan Apache
FROM php:8.2-apache

# Install ekstensi dan tools Laravel
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy semua file Laravel ke dalam container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install dependency composer
RUN composer install --no-dev --optimize-autoloader

# Set permission storage
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Jalankan Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
