FROM php:7.2-fpm-alpine

RUN docker-php-ext-install mbstring dom curl pdo_mysql zip intl pcntl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

ADD php.ini /usr/local/etc/php