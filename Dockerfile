FROM php:8.2-apache

# --------------------------------------------------
# Enable required Apache modules
# --------------------------------------------------
RUN a2enmod rewrite headers

# --------------------------------------------------
# Allow .htaccess overrides
# --------------------------------------------------
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# --------------------------------------------------
# Set Apache document root explicitly
# --------------------------------------------------
ENV APACHE_DOCUMENT_ROOT /var/www/html

RUN sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf

# --------------------------------------------------
# Copy application files
# --------------------------------------------------
COPY . /var/www/html/

# --------------------------------------------------
# Permissions
# --------------------------------------------------
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# --------------------------------------------------
# Expose port (Render requirement)
# --------------------------------------------------
EXPOSE 80
