FROM php:8.3-fpm

# Kopiowanie plików composer.lock i composer.json do katalogu roboczego
COPY composer.lock composer.json /var/www/html/

# Ustawienie katalogu roboczego
WORKDIR /var/www/html

# Instalacja zależności systemowych
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    libzip-dev \
    unzip \
    git \
    libonig-dev \
    curl

# Czyszczenie cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalacja rozszerzeń PHP
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Instalacja Composer (PHP package manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Kopiowanie istniejących plików aplikacji do katalogu roboczego
COPY . /var/www/html

# Instalacja zależności PHP
RUN composer install

# Ustawienie odpowiednich uprawnień do katalogów
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Eksportowanie portu 9000 i uruchomienie serwera php-fpm (FastCGI Process Manager)
EXPOSE 9000
CMD ["php-fpm"]
