FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli && docker-php-ext-install pdo_mysql
WORKDIR /var/www/html
RUN a2enmod rewrite && a2enmod ssl && a2enmod socache_shmcb
RUN sed -i '/SSLCertificateFile.*snakeoil\.pem/c\SSLCertificateFile \/etc\/ssl\/certs\/mycert.crt' /etc/apache2/sites-available/default-ssl.conf && sed -i '/SSLCertificateKeyFile.*snakeoil\.key/cSSLCertificateKeyFile /etc/ssl/private/mycert.key\' /etc/apache2/sites-available/default-ssl.conf
RUN a2ensite default-ssl

COPY . .
EXPOSE 80