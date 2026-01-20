FROM php:8.4-apache

# 1. Installation des dépendances système (PHP + Node.js)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    git \
    curl \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# 2. Installation des extensions PHP
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd

# 3. Configuration Apache
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

# 4. Copie du code et installation des dépendances PHP (Composer)
COPY . .
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 5. Installation des dépendances JS et compilation VITE
# Cela crée le fichier public/build/manifest.json manquant
RUN npm install && npm run build

# 6. Gestion des permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

# 7. Nettoyage, Migration et Démarrage
# Note: On utilise un script shell pour s'assurer que les commandes s'exécutent dans l'ordre
CMD php artisan config:clear && \
    php artisan view:clear && \
    php artisan migrate --force && \
    apache2-foreground