FROM php:8.2-fpm

# Installer les dépendances système, y compris libonig-dev pour mbstring
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    libonig-dev \
    unzip \
    && docker-php-ext-install pdo pdo_pgsql zip mbstring

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers
COPY . .

# Installer les dépendances PHP
RUN composer install --optimize-autoloader --no-dev

# Configurer les permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exposer le port
EXPOSE 8080

# Commande pour démarrer
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8080