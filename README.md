## База данных, api
1. ```cp .env.example .env```
2. Отредактировать файл .env (добавить даные для подключения к базе данных).
2.1 При необходимости сменить api-ключ(KEY_API_ROUTES) для сервиса openrouteservice.org.
3. ```php artisan migrate```
4. ```php artisan db:seed```
