# Laravel Hookdeck

Laravel wrapper for the official Hookdeck PHP SDK generated via OpenAPI.

## ✅ Features

- Full support for all Hookdeck APIs
- Auto-discovery via HookdeckManager
- Laravel ServiceProvider + Facade
- Artisan command to list connections

## 📦 Installation

```bash
composer require gainline/laravel-hookdeck
php artisan vendor:publish --tag=config
```

## ⚙️ Setup

Set in `.env`:

```
HOOKDECK_API_KEY=your-api-key
HOOKDECK_BASE_URI=https://api.hookdeck.com/2025-01-01
```

## 🧩 Usage

```php
Hookdeck::connectionsApi->listConnections();
Hookdeck::eventsApi->listEvents();
```

## 🧰 Artisan Commands

```bash
php artisan hookdeck:connections
```

## 🧪 Testing

Run tests with:

```bash
vendor/bin/phpunit
```
