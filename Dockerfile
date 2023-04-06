FROM php:8.2-apache

ARG DATABASE_URL

# Install required packages
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install \
    intl \
    pdo_mysql \
    pdo_pgsql \
    zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Enable Apache modules
RUN a2enmod rewrite headers

# Set the working directory
WORKDIR /var/www/html

# Copy the application code
COPY . /var/www/html

# Install dependencies
RUN composer install --optimize-autoloader

# Expose port 8000
EXPOSE 8000

# Start the Apache server
CMD ["apache2-foreground"]
