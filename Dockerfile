# Gunakan PHP 8.2 + Apache
FROM php:8.2-apache

# Install dependencies agar Laravel bisa jalan
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

# Copy semua file Laravel ke container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install dependencies composer
RUN composer install --no-dev --optimize-autoloader

# Set Apache DocumentRoot ke folder public (WAJIB untuk Laravel)
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

# Update konfigurasi virtual host Apache
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/000-default.conf

# Update Apache global config
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/apache2.conf

# Enable mod_rewrite untuk routing Laravel
RUN a2enmod rewrite

# Permission untuk storage dan cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

# Jalankan Apache (production-ready)
CMD ["apache2-foreground"]
