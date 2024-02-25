# botec-web
Botec web interface

## Запуск проекта:
- Установить зависимости
   ```bash
  composer install
   ```
- Копировать файл .env.example в .env и при необходимости внести изменения
   ```bash
  cp .env.example .env
  ```
- Сгенерировать ключ
  ```bash
   php artisan key:generate
  ````
- Собрать статику
   ```bash
   make build-static
   ```
- Перейти в build/dev и выполнить docker-compose up
   ```bash
   cd build/dev && docker-compose up -d
   ```
- Выполнить миграции
   ```bash
   docker exec botec-web /bin/sh -c "php artisan migrate"
   ```
- Прогнать тесты
   ```bash
   docker exec botec-web /bin/sh -c "php artisan test"
   ``` 
