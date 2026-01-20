FROM php:8.4-apache

# Installation des dépendances système (Ajout de libpq-dev pour PostgreSQL)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    git \
    curl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installation des extensions PHP (Remplacement de pdo_mysql par pdo_pgsql)
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd

# --- CONFIGURATION APACHE ---
RUN a2dismod mpm_event mpm_worker || true && a2enmod mpm_prefork rewrite

# Configuration du dossier public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html
COPY . .

# Installation de Composer et dépendances
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

# --- AUTOMATISATION DES MIGRATIONS ---
# Cette commande va : 1. Lancer les migrations 2. Démarrer Apache
CMD php artisan migrate --force && apache2-foreground