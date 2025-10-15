FROM php:8.2-apache

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable Apache modules
RUN a2enmod rewrite

# Configure Apache
RUN printf "<Directory /var/www/html>\n\tOptions Indexes FollowSymLinks\n\tAllowOverride All\n\tRequire all granted\n</Directory>\n" \
  > /etc/apache2/conf-available/z-override.conf \
 && a2enconf z-override

# Set document root to public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy application files
COPY ./miappmvc /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

WORKDIR /var/www/html
EXPOSE 80

