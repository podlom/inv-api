FROM yiisoftware/yii2-php:7.4-apache

# Change document root for Apache
RUN sed -i -e 's|/app/web|/app/api/web|g' /etc/apache2/sites-available/000-default.conf

# Add .htaccess file in document root for Apache
RUN echo "RewriteEngine on" >> /app/api/web/.htaccess
RUN echo "#" >> /app/api/web/.htaccess
RUN echo "RewriteCond %{REQUEST_FILENAME} !-f" >> /app/api/web/.htaccess
RUN echo "RewriteCond %{REQUEST_FILENAME} !-d" >> /app/api/web/.htaccess
RUN echo "#" >> /app/api/web/.htaccess
RUN echo "RewriteRule . index.php" >> /app/api/web/.htaccess
