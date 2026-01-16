## About Smart Admin

## Installation

### Docker first run

1) Copy `.env.example` to `.env` and adjust secrets if needed.
2) Start containers and seed the database:

```bash
docker compose up -d --build
docker compose exec app php artisan key:generate
```

Open `http://localhost:8081`.

On first container start (when the `migrations` table is missing), the DB is rebuilt and `database/seeds/DatabaseSeeder.php` runs automatically.
If you ever see "table doesn't exist" errors, run a fresh rebuild:
```bash
docker compose exec app php artisan migrate:fresh --seed
```

### Local (without Docker)

```
composer install
```

- Go to `[Your_Folder]/public/` you find `plugins.zip` file, extract it in same folder.

```
php artisan serve
```
## TODO

- [ ] Dashboard Module
- [ ] Profile Module
- [ ] Settings Module
- [ ] Invoice Module
- [ ] Media Library Module

## License

Smart Admin is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
