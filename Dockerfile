#ディレクトリ作成編
FROM php:8.3-fpm 

#cppy  mypc:dockerのpc->自分のpc./app
COPY . .  

WORKDIR /app

COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME "/opt/composer"
ENV PATH "$PATH:/opt/composer/vendor/bin"

RUN apt-get update
RUN apt-get -y install git unzip libzip-dev default-mysql-client
RUN docker-php-ext-install zip pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql
#アプリケーション作成編
#
COPY . .
#
WORKDIR /app/laravel-up
#
RUN composer install
#laravelの起動
#本来のpcでは　php artisan serveでlaravelを起動するがスペースを,で区切る
#laravelはdockerのlocal
CMD ["php", "artisan","serve", "--host", "0.0.0.0"]
EXPOSE 8000

