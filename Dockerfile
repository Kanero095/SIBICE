FROM php:8.2-apache

# -----------------------------------------
# 1. Install dependencies
# -----------------------------------------
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    git \
    && docker-php-ext-install pdo_pgsql pgsql mbstring zip exif pcntl bcmath gd

# Tambah ServerName biar hilang warning AH00558
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Enable Apache mod_rewrite (wajib buat Laravel)
RUN a2enmod rewrite

# -----------------------------------------
# 2. Set working directory
# -----------------------------------------
WORKDIR /var/www/html

# -----------------------------------------
# 3. Copy project
# -----------------------------------------
COPY . /var/www/html/

# -----------------------------------------
# 4. Install Composer
# -----------------------------------------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# -----------------------------------------
# 5. Copy .env ke dalam container (kalau ada)
# -----------------------------------------
# BISA DIHAPUS jika pakai ENV dari Render dashboard
# COPY .env /var/www/html/.env

# -----------------------------------------
# 6. Laravel setup
# -----------------------------------------
RUN php artisan key:generate || true
RUN php artisan storage:link || true

# -----------------------------------------
# 7. Permission fix (wajib)
# -----------------------------------------
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# -----------------------------------------
# 8. Apache DocumentRoot (public folder)
# -----------------------------------------
RUN sed -i 's#DocumentRoot /var/www/html#DocumentRoot /var/www/html/public#g' \
    /etc/apache2/sites-available/000-default.conf

# -----------------------------------------
# 9. Expose port
# -----------------------------------------
EXPOSE 80

# -----------------------------------------
# 10. Start Apache
# -----------------------------------------
CMD ["apache2-foreground"]
