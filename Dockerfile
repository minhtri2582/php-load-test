FROM php:7-fpm
COPY index.php .
CMD php -S 0.0.0.0:80 index.php