# Use the official PHP image with Apache
FROM php:8.1.2-apache

# Install system dependencies and PHP extensions needed by Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the application code to the container
COPY . /var/www/html/

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set Apache document root to the public directory of Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update Apache configuration with the new document root
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Generate Laravel application key
RUN php artisan key:generate

# Ensure .htaccess files can be used by overriding AllowOverride setting for the public directory
RUN { \
        echo '<Directory "${APACHE_DOCUMENT_ROOT}">'; \
        echo '    AllowOverride All'; \
        echo '</Directory>'; \
    } >> /etc/apache2/conf-available/docker-laravel.conf && a2enconf docker-laravel

EXPOSE 80
