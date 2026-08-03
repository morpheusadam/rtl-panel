# Bazaar Panel

Bazaar Panel is a Laravel e-commerce application with a customer storefront and an admin dashboard, built for developers and agencies who need a ready-made online store that works in right-to-left layouts.

## Overview

The application ships both halves of a shop: a public storefront and an admin panel for running it. Built on Laravel with a Bootstrap 4 and Vue 2 front end, it covers products, brands, categories, a shopping cart, coupons, orders, shipping, product reviews, wishlists, and a blog.

Layouts are designed for right-to-left interfaces, which makes it a starting point for Persian, Arabic, and Hebrew stores. Authentication, social login, real-time messaging, and PDF invoice generation are already wired in.

## Features

- Products, brands, categories, cart, coupons, orders, and shipping.
- Admin dashboard for the catalogue, banners, orders, users, and site settings.
- PayPal checkout via `srmklive/paypal`.
- Laravel UI authentication plus OAuth through Laravel Socialite.
- Product reviews and customer wishlists.
- Blog with posts, categories, tags, and comments.
- Real-time messaging and notifications through Pusher and Laravel Echo.
- PDF invoices generated with `barryvdh/laravel-dompdf`.
- Image processing with Intervention Image and a file manager from UniSharp.
- Newsletter subscriber management via `spatie/laravel-newsletter`.
- RTL-friendly layouts for Persian, Arabic, and Hebrew stores.

## Requirements

- PHP with the required extensions, including `imagick` for image processing.
- Composer.
- Node.js and npm.
- MySQL, or another database Laravel supports.

## Installation

```bash
# 1. Clone the repository
git clone https://github.com/morpheusadam/BazaarPanel.git
cd BazaarPanel

# 2. Install PHP and JS dependencies
composer install
npm install

# 3. Configure the environment
cp .env.example .env
php artisan key:generate

# 4. Set database credentials in .env, then migrate and seed
php artisan migrate --seed

# 5. Link storage and build assets
php artisan storage:link
npm run dev

# 6. Serve the application
php artisan serve
```

Open `http://127.0.0.1:8000` in a browser.

## Configuration

Set the following in `.env`:

- Database: the `DB_*` connection settings.
- PayPal: sandbox or live credentials for checkout.
- Pusher: the `PUSHER_*` keys for real-time messaging and notifications.
- Mail: SMTP settings for password resets and the newsletter.

## Tech stack

| Layer | Technology |
| --- | --- |
| Framework | Laravel (PHP) |
| Front end | Blade, Bootstrap 4, Vue 2 |
| Build | Laravel Mix (webpack), Sass |
| Real-time | Pusher, Laravel Echo |
| Payments | PayPal (srmklive/paypal) |
| Media | Intervention Image, UniSharp File Manager |
| Auth | Laravel UI, Laravel Socialite, Sanctum |

## Project structure

```text
BazaarPanel/
├── app/
│   ├── Http/Controllers/   # storefront and admin controllers
│   ├── Models/             # Product, Order, Cart, Post, User, ...
│   └── Notifications/      # status and order notifications
├── public/
│   ├── backend/            # admin panel assets
│   └── frontend/           # storefront assets
├── resources/views/        # Blade templates
├── routes/                 # web.php / api.php
└── database/               # migrations and seeders
```

## Contributing

Open an [issue](https://github.com/morpheusadam/BazaarPanel/issues) or submit a pull request with features, fixes, or improvements.

## Licence

MIT. See [`LICENSE`](LICENSE) for details.

## Author

Morpheus Adam — web developer, PHP / Laravel / Go.

- GitHub: [morpheusadam](https://github.com/morpheusadam)
- Website: [sam.zeonic.me](https://sam.zeonic.me)
- Email: morpheusadam95@gmail.com
