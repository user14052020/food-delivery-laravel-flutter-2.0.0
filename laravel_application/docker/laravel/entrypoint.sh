#!/bin/sh
set -e

if [ -f /var/www/html/artisan ]; then
  echo "Waiting for database..."
  until php -r '
$host = getenv("DB_HOST") ?: "db";
$port = getenv("DB_PORT") ?: "3306";
$db = getenv("DB_DATABASE") ?: "forge";
$user = getenv("DB_USERNAME") ?: "forge";
$pass = getenv("DB_PASSWORD") ?: "";
try {
    new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
} catch (Exception $e) {
    exit(1);
}
  '; do
    sleep 2
  done

  if ! php -r '
$host = getenv("DB_HOST") ?: "db";
$port = getenv("DB_PORT") ?: "3306";
$db = getenv("DB_DATABASE") ?: "forge";
$user = getenv("DB_USERNAME") ?: "forge";
$pass = getenv("DB_PASSWORD") ?: "";
$pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
$stmt = $pdo->prepare("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = ? AND table_name = ?");
$stmt->execute([$db, "migrations"]);
$count = (int) $stmt->fetchColumn();
exit($count > 0 ? 0 : 1);
  '; then
    echo "Running initial migrations and seeds..."
    php artisan migrate:fresh --force --seed
  fi
fi

exec apache2-foreground
