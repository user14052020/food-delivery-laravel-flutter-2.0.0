# Food Delivery (Flutter + Laravel)

This repository contains:
- **Flutter mobile app** for a restaurant/cafe.
- **Laravel admin panel** for managing the system.

The project supports **multiple restaurants** (multi-tenant in the sense of many restaurants managed in one system).

Only the Laravel admin panel is dockerized here, as requested.

## Project structure

- `flutter_application/` — Flutter mobile client.
- `laravel_application/` — Laravel 5.8 admin panel.


## Laravel admin panel in Docker

Docker files are located inside `laravel_application/`:

- `laravel_application/docker-compose.yml`
- `laravel_application/docker/laravel/Dockerfile`
- `laravel_application/docker/laravel/laravel.conf`

### One-time setup

1) Make sure Docker Desktop is running.
2) Copy `laravel_application/.env.example` to `laravel_application/.env` and update secrets if needed.

### Start containers

```bash
cd laravel_application
docker compose up -d --build
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate --seed
```

Open:
- Admin panel: `http://localhost:8081`

### Database import behavior

The initial data is seeded from `database/seeds`.
If you need a fresh seed run:

```bash
cd laravel_application
docker compose exec app php artisan migrate:fresh --seed
```

### Useful notes

- Laravel reads environment variables from `laravel_application/.env`.
- Seeded app settings (mail, social auth, payments) are pulled from `.env` keys like `FACEBOOK_APP_ID`, `STRIPE_KEY`, `PAYPAL_USERNAME`.
- If you see permission issues with logs/cache:
  ```bash
  docker compose exec app chmod -R 775 storage bootstrap/cache
  ```
- If you run into cached config errors:
  ```bash
  docker compose exec app rm -f bootstrap/cache/config.php
  docker compose exec app php artisan config:clear
  ```

## Flutter app (local run)

The Flutter app is not dockerized in this setup. Run it normally:

```bash
cd flutter_application
flutter pub get
flutter run
```

## Git ignore

Repository ignore rules live in:
- `laravel_application/.gitignore` (already ignores `vendor`, `node_modules`, `.env`, etc.)
- root `.gitignore` (added for OS and Flutter artifacts)

## Credentials

admin@demo.com / `SEED_ADMIN_PASSWORD` (falls back to `SEED_USER_PASSWORD`, default `123456`)
