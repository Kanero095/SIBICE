FROM php:8.2-apache

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd

# Enable Apache modules (headers + rewrite)
RUN a2enmod headers && a2enmod rewrite

# Set document root ke folder public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

# Update Apache configs supaya DocumentRoot bener
RUN sed -ri 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf
RUN sed -ri 's!<Directory /var/www/>!<Directory /var/www/html/public>!g' /etc/apache2/apache2.conf
RUN sed -ri 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project Laravel ke container
COPY . /var/www/html

WORKDIR /var/www/html

# Composer install
RUN composer install --no-dev --optimize-autoloader

# Laravel permissions
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
