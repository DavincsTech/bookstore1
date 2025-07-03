
# Use official PHP Apache image
FROM php:8.1-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy app files
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Give write permissions (if needed)
RUN chown -R www-data:www-data /var/www/html
