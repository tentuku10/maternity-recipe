FROM php:8.2-fpm as php82

ENV TZ=Asia/Tokyo

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
	apt-get install -y git unzip libzip-dev libjpeg-dev libicu-dev libonig-dev nodejs npm libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
    docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/ && \
    docker-php-ext-install intl pdo_mysql zip bcmath gd sockets exif

COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

# nodeのバージョンをUP
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash -
RUN apt update && apt install -y nodejs