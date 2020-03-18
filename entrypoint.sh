#!/bin/bash

set -e

composer install
php artisan migrate:install
php artisan migrate
php artisan db:seed
vendor/bin/phpunit

php-fpm
