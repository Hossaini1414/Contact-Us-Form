# استفاده از تصویر php با نسخه 8.2 و FPM
FROM php:8.2-fpm

# نصب پکیج‌های مورد نیاز و اکستنشن‌های PHP
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# نصب Composer از تصویر رسمی
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تنظیم دایرکتوری کاری
WORKDIR /var/www/html

# کپی کردن کل پروژه به داخل کانتینر
COPY . .

# نصب پکیج‌های PHP پروژه
RUN composer install --no-dev --optimize-autoloader

# کش کردن کانفیگ لاراول
RUN php artisan config:cache

# باز کردن پورت 8000 برای دسترسی
EXPOSE 8000

# اجرای سرور داخلی لاراول با دسترسی به همه IP ها
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
