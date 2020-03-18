FROM php:7.0-fpm

RUN apt-get update \
    && apt-get install -y build-essential curl git \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* 

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

RUN groupadd -g 1000 www \
    && useradd -u 1000 -ms /bin/bash -g www www

RUN docker-php-ext-install mbstring pdo pdo_mysql json mysqli

COPY .env /var/www
COPY . /var/www
RUN chmod +x /var/www/entrypoint.sh

USER www

EXPOSE 9000

ENTRYPOINT ["./entrypoint.sh"]
