#!/bin/bash

cd /var/www/html/form
composer install
php-fpm
httpd -D FOREGROUND
