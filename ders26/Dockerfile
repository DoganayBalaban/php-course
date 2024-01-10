# Base image
FROM php:8.0.2-fpm

# Install Nginx and Supervisor
RUN apt-get update &&  apt-get install -y \
    nginx\
    git

WORKDIR /var/www

# Expose port 80
EXPOSE 80

