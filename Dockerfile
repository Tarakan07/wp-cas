FROM wordpress:5.8

# Обновляем список пакетов, устанавливаем vim и Apache
RUN apt-get update && \
    apt-get install -y vim apache2

# Копируем кастомный wp-config.php в нужную директорию
COPY wp-config.php /var/www/html/wp-config.php

# Задаем команду по умолчанию для запуска Apache в фоновом режиме
CMD ["apache2ctl", "-D", "FOREGROUND"]
