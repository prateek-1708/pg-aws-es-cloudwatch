FROM php:7.1.1-alpine

ADD ./vendor /app/vendor
ADD ./testMonolog.php /app/

ENTRYPOINT ["php", "/app/testMonolog.php"]