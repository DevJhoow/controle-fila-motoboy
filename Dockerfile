FROM php:8.2-apache

# Ativa rewrite
RUN a2enmod rewrite

# Ajusta o DocumentRoot para /public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf


# Dependências do sistema
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql

# Habilitar rewrite
RUN a2enmod rewrite

# Apache aponta para /public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf

# Copiar projeto
COPY . /var/www/html

WORKDIR /var/www/html

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html


# Permissões
RUN chown -R www-data:www-data storage bootstrap/cache

RUN php artisan migrate --force || true

FROM php:8.2-apache

# Dependências do sistema
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql

# Apache
RUN a2enmod rewrite

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Projeto
COPY . /var/www/html
WORKDIR /var/www/html

# Dependências Laravel
RUN composer install --no-dev --optimize-autoloader

# Permissões
RUN chown -R www-data:www-data storage bootstrap/cache

# 🔥 COMANDO FINAL (ESSA LINHA É O START COMMAND)
CMD php artisan migrate --force \
 && php artisan db:seed --force \
 && apache2-foreground


EXPOSE 80
