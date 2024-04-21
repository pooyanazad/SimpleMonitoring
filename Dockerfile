# Use the official PHP image as the base image
FROM php:7.4-apache

# Install required extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy the source code to the container
COPY . /var/www/html/

# Expose port 80
EXPOSE 80

# Set the default command to run when the container starts
CMD ["apachectl", "-D", "FOREGROUND"]
