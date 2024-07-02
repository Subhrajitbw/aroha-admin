# Use the official PHP image
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install gd \
    && docker-php-ext-install zip pdo_mysql intl pcntl exif calendar \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Node.js (latest LTS version) and npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Copy existing application directory contents
COPY . .

# Create storage symbolic link and set permissions
RUN php artisan storage:link \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

RUN echo "allow_url_fopen = On" >> /usr/local/etc/php/php.ini \
    && echo "allow_url_include = Off" >> /usr/local/etc/php/php.ini


# Install Laravel dependencies
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Install npm dependencies
RUN npm install

# Generate application key
RUN php artisan key:generate

# Expose port 8000 and start the Laravel development server
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
