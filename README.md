# botec-web
Botec web interface

Установка зависимостей: composer install

Запуск проекта: 
 - Копировать файл .env.example в .env и при необходимости внести изменения
 - Сгенерировать ключ `php artisan key:generate`
 - Собрать статику `make build-static`
 - Перейти в build/dev
 - Выполнить docker-compose up
