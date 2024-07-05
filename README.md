# Blog Admin Panel

## Установка

1. Клонируйте репозиторий:
    ```bash
    git clone https://github.com/asetturgantay/blog-admin.git
    ```

2. Перейдите в директорию проекта:
    ```bash
    cd blog-admin
    ```

3. Установите зависимости:
    ```bash
    composer install
    npm install
    npm run dev
    ```

4. Настройте файл `.env`.

5. Выполните миграции и сидеры:
    ```bash
    php artisan migrate --seed
    ```

6. Запустите локальный сервер:
    ```bash
    php artisan serve
    ```

## Использование

1. Перейдите на `http://localhost:8000` для доступа к приложению.
2. Зарегистрируйтесь или войдите с уже существующим пользователем.

## Дамп базы данных

Файл дампа базы данных находится в корне проекта: `blog_admin.sql`.
# blog-admin
