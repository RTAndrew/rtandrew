# Install PHP extensions
FROM richarvey/nginx-php-fpm:1.7.2

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV APP_KEY=base64:HXeh9MU8H9auFo9bVdLbvrWfjlKXm+IRb22OhALtA1E=
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# Set up node and npm

RUN curl -sL https://deb.nodesource.com/setup_18.x | bash
RUN apt-get update && apt-get -y install nodejs 


#Serve the application

RUN composer install
RUN npm install
CMD php artisan migrate --force && php artisan storage:link && php artisan serve --host=0.0.0.0 --port=$PORT