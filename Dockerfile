# Utiliza una imagen base de PHP
FROM php:8.2-fpm

# Instala las extensiones PHP necesarias para Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copia el archivo composer.json y composer.lock al contenedor
COPY composer.json composer.lock ./

# Instala las dependencias de Composer
RUN composer install

# Copia todos los archivos de tu proyecto al contenedor
COPY . .

# Exponer el puerto 9000 para la comunicación con el servidor web (si es necesario)
EXPOSE 9000

# CMD para ejecutar el servidor PHP-FPM
CMD ["php-fpm"]
