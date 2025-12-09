FROM php:8.2-apache

# Install ekstensi PHP
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd

# Enable Apache modules
RUN a2enmod rewrite
RUN a2enmod headers

# Set DocumentRoot ke public/
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri \
    -e 's!/var/www/html!/var/www/html/public!g' \
    /etc/apache2/sites-available/000-default.conf \
    /etc/apache2/apache2.conf

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project Laravel
COPY . /var/www/html

WORKDIR /var/www/html

# Composer install
RUN composer install --no-dev --optimize-autoloader

# Permission
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
