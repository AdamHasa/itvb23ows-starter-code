
FROM php:7.4-apache


COPY . /var/www/html/

# Installeer de mysqli-extensie
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Configureer Apache om .htaccess-bestanden te gebruiken
RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]
