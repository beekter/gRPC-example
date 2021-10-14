FROM beekter/php:8.0-fpm-grpc
RUN apt-get update -y \
    && apt-get install -y nginx

# PHP_CPPFLAGS are used by the docker-php-ext-* scripts
ENV PHP_CPPFLAGS="$PHP_CPPFLAGS -std=c++11"

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install opcache \
    && apt-get install libicu-dev -y \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && apt-get remove libicu-dev icu-devtools -y

RUN { \
        echo 'opcache.memory_consumption=128'; \
        echo 'opcache.interned_strings_buffer=8'; \
        echo 'opcache.max_accelerated_files=4000'; \
        echo 'opcache.revalidate_freq=2'; \
        echo 'opcache.fast_shutdown=1'; \
        echo 'opcache.enable_cli=1'; \
    } > /usr/local/etc/php/conf.d/php-opocache-cfg.ini

COPY --chown=www-data:wwww-data image-files/nginx/default.conf /etc/nginx/nginx.conf
#COPY --chown=www-data:wwww-data image-files/www.conf /usr/local/etc/php-fpm.d/www.conf
#COPY --chown=www-data:wwww-data image-files/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf
COPY --chown=www-data:www-data entrypoint.sh /etc/entrypoint.sh

RUN mkdir /app && chown -R www-data:www-data /app

RUN sed -i 's/short_open_tag = Off/short_open_tag = On/g' /usr/local/etc/php/php.ini-development \
    && sed -i 's/short_open_tag = Off/short_open_tag = On/g' /usr/local/etc/php/php.ini-production

WORKDIR /app

EXPOSE 80

ENTRYPOINT ["/etc/entrypoint.sh"]
