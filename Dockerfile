FROM php:8.2.23RC1-cli-alpine3.20

COPY ./src /var/www/html
WORKDIR /var/www/html

RUN docker-php-ext-install mysqli pdo pdo_mysql

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080" ]