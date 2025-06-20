FROM php:8.1-apache

RUN docker-php-ext-install mysqli

# Enable allow_url_include and allow_url_fopen
RUN echo "allow_url_include = On\nallow_url_fopen = On" > /usr/local/etc/php/conf.d/rfi.ini

COPY index.php /var/www/html/
