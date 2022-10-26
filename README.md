## Задание


Разработать REST API для записной книжки . Примерная структура методов:


    1.1. GET /api/v1/notebook/
    1.2. POST /api/v1/notebook/
    1.3. GET /api/v1/notebook/<id>/
    1.4. POST /api/v1/notebook/<id>/
    1.5. DELETE /api/v1/notebook/<id>/


Поля для POST запискной книжки:


    1. ФИО (обязательное)
    2. Компания
    3. Телефон (обязательное)
    4. Email (обязательное)
    5. Дата рождения 
    6. Фото

Нужна возможность выводить информацию в списке по странично

Swagger для отображения методов api (https://swagger.io/)


Так же напишите нам, как вы тестировали результат своей работы. Какие используете инструменты и как вы осуществляете тестирование.

Дополнительным плюсом будет: Финальный билд приложения должен быть запускаться из Docker контейнера (хотябы с минимальной конфигурацией)  

## Установка

1. Запустить Docker:

    ```shell
    docker-compose up -d
    ```
2. Запустить миграцию и заполнение базу данных

    ```shell
    docker exec -it project_app php artisan migrate
    ```

      ```shell
    docker exec -it project_app php artisan db:seed
    ```

### Файл с swagger документацией

 ```shell
    /storage/api-docs/api-docs.json
   ```

[Swagger документация](http://localhost:8876/api/documentation)
