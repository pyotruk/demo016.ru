FROM wyveo/nginx-php-fpm:php73

COPY . /var/www/demo016.ru/
COPY ./demo016.ru.nginx.conf /etc/nginx/conf.d/
