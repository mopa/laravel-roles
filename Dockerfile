FROM php:7.4-apache

ARG user
ARG uid


RUN apt-get update && apt-get install -y libzip-dev zip libmcrypt-dev mariadb-client libmagickwand-dev --no-install-recommends

RUN pecl install imagick
RUN docker-php-ext-enable imagick
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install zip
RUN a2enmod rewrite
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install and config xdebug
# RUN pecl install xdebug-2.5.5 && docker-php-ext-enable xdebug
# RUN echo "[xdebug]\n" \
#          "zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20151012/xdebug.so\n" \
#          "xdebug.remote_enable=on\n" \
#          "xdebug.remote_autostart=on\n" \
#          "xdebug.remote_connect_back=1\n" \
#          "xdebug.idekey=VSCODE\n" \
#          "xdebug.remote_handler=dbgp\n" \
#          "xdebug.profiler_enable=off\n" \
#          "xdebug.profiler_output_dir=\"/app\"\n" \
#          "xdebug.remote_port=9000\n" \
#          "xdebug.remote_host=127.0.0.1\n" \
#          > /usr/local/etc/php/conf.d/xdebug.ini

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /app

USER $user
