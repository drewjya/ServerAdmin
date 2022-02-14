FROM php:7.4-apache
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 774 /var/www/html
COPY ./src/ /var/www/html