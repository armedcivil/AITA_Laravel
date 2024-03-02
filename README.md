### Initialize

```
cd src
composer install
chown www-data storage -R
php artisan storage:link
cp .env.example .env
php artisan key:generate
```