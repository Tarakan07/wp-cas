# Используем официальный образ WordPress в качестве базового
FROM wordpress:latest

# Устанавливаем vim и Apache
RUN apt-get update && apt-get install -y vim apache2

# Копируем папку wp-content и файл wp-config.php в корень контейнера
COPY wp-content /var/www/html/wp-content
COPY wp-config.php /var/www/html/wp-config.php

# Устанавливаем необходимые права для файлов и папок
RUN chown -R www-data:www-data /var/www/html/wp-content \
    && chown www-data:www-data /var/www/html/wp-config.php

# Указываем рабочую директорию
WORKDIR /var/www/html

# Открываем порт 80 для HTTP соединений
EXPOSE 80

# Запускаем Apache внутри контейнера
CMD ["apache2ctl", "-D", "FOREGROUND"]
