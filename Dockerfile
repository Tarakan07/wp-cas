# Используем базовый образ WordPress
FROM wordpress:5.8

# Обновляем список пакетов и устанавливаем vim
RUN apt-get update && \
    apt-get install -y vim

# Копируем кастомный wp-config.php в нужную директорию
COPY wp-config.php /var/www/html/wp-config.php

# Устанавливаем права на файл wp-config.php
# RUN chown www-data:www-data /var/www/html/wp-config.php

# Команда для запуска Apache в фоновом режиме
CMD ["apache2ctl", "-D", "FOREGROUND"]
