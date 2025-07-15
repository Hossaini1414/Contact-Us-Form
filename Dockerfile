# استفاده از تصویر رسمی PHP
FROM php:8.2-apache

# فعال‌سازی mod_rewrite برای Laravel routing
RUN a2enmod rewrite

# نصب وابستگی‌های مورد نیاز
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libonig-dev \
    && docker-php-ext-install pdo_mysql zip

# نصب Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تنظیم پوشه کاری
WORKDIR /var/www/html

# کپی همه فایل‌ها داخل کانتینر
COPY . .

# نصب وابستگی‌های Laravel
RUN composer install --no-dev --optimize-autoloader

# تنظیم دسترسی‌ها برای storage و bootstrap/cache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# باز کردن پورت 80
EXPOSE 80
