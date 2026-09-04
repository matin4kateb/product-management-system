# Product Management System

![License](https://img.shields.io/badge/license-MIT-blue.svg)
![PHP](https://img.shields.io/badge/PHP-8.3%2B-777BB4.svg?logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-13.x-FF2D20.svg?logo=laravel&logoColor=white)
![Node.js](https://img.shields.io/badge/Node.js-20%2B-339933.svg?logo=node.js&logoColor=white)

Product Management System is an open-source Laravel application for product catalogs and inventory management. It provides authentication, product ownership, categories, stock quantities, search, filtering, pagination and a responsive interface.

## Features

- Seller registration, login and logout
- Product creation, editing and soft deletion
- Automatic unique SKU generation
- Product categories and active/inactive category support
- Search by product name or SKU
- Category filtering and pagination
- Ownership-based authorization with Laravel policies
- Responsive and accessible Blade interface
- SQLite and MySQL-compatible migrations

## Requirements

- PHP 8.3 or newer
- Composer 2.x
- Node.js 20 or newer
- npm 10 or newer
- MySQL 8+ or SQLite

## Installation

```bash
git clone <repository-url>
cd product-management-system
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run build
```

On Windows PowerShell, replace the copy command with:

```powershell
Copy-Item .env.example .env
```

Configure the `DB_*` values in `.env` before running migrations. The default example uses:

```dotenv
DB_DATABASE=product_manage
DB_USERNAME=root
DB_PASSWORD=
```

## Running locally

```bash
php artisan serve
```

For frontend hot reload, run this in a second terminal:

```bash
npm run dev
```

The application is available at `http://127.0.0.1:8000`.

## Testing

```bash
php artisan test
vendor/bin/pint --test
npm run build
```

## Project structure

```text
app/                    Application code, requests, models and policies
database/               Migrations, factories and seeders
resources/css/          Application styles
resources/js/           Frontend behavior
resources/views/        Blade templates
routes/                 Web and console routes
tests/                  Pest tests
```

## Security

Never commit `.env`, credentials, API keys or production database dumps. See [SECURITY.md](SECURITY.md) for vulnerability reports.

## Contributing

Contributions are welcome. Read [CONTRIBUTING.md](CONTRIBUTING.md) before opening an issue or pull request.

## License

This project is released under the [MIT License](LICENSE).

Copyright © 2026 Mohammad Matin Kateb (Matin M. Kateb)
