FROM php:8.3-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    nodejs \
    npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mysqli mbstring exif pcntl bcmath gd xml zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy composer files and install PHP deps
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Copy package files and install Node deps
COPY package.json package-lock.json* ./
RUN npm ci 2>/dev/null || npm install

# Copy all application files
COPY . .

# Build frontend assets (after COPY so public/build stays)
RUN npm run build

# Re-run composer scripts
RUN composer dump-autoload --optimize

# Set permissions
RUN chmod -R 775 storage bootstrap/cache

EXPOSE 8080

CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
