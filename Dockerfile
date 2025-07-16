# Use PHP 8 with Apache
FROM php:8.1-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy project files to Apache server root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose port
EXPOSE 80
