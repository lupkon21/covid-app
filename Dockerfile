# Build
FROM php:8.0.11-alpine AS build
WORKDIR /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apk add --no-cache --virtual .build-deps \
    autoconf \
    g++ \
    make \
    git \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

COPY composer.json composer.lock ./
COPY templates templates/
COPY vendor vendor/

RUN mkdir app
COPY index.php app/

RUN composer install --no-dev --no-scripts --no-progress --no-interaction

# Final stage
FROM php:8.0.11-alpine

COPY --from=build /app/app ./
COPY --from=build /app/templates templates/
COPY --from=build /app/vendor vendor/

CMD ["php", "-S", "0.0.0.0:80", "-t", "./"]
EXPOSE 80


