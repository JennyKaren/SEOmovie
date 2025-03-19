# Utiliser une image PHP avec Apache
FROM php:8.2-apache

# Copier les fichiers du projet dans le conteneur
COPY . /var/www/html/

# Exposer le port 80 (port par défaut d'Apache)
EXPOSE 80

# Installer des extensions PHP si nécessaire
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Activer le module Apache "rewrite" (si vous utilisez des URL réécrites)
RUN a2enmod rewrite

# Définir le répertoire de travail
WORKDIR /var/www/html

# Commande par défaut pour démarrer Apache
CMD ["apache2-foreground"]