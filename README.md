<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Desa Digital API 🏘️

API backend untuk sistem informasi desa digital, dibangun menggunakan **Laravel 13** dan **PHP 8.4**. Proyek ini menerapkan **Repository Pattern** untuk arsitektur yang bersih dan terukur, serta mendukung Docker Sail untuk lingkungan pengembangan yang terisolasi.

## 🚀 Fitur Utama

- **Repository Pattern**: Pemisahan logika data dan bisnis.
- **UUID**: Identifikasi unik untuk keamanan data.
- **Soft Deletes**: Pengamanan penghapusan data secara logis.
- **Custom Scopes**: Logika pencarian yang efisien pada model.
- **Docker Ready**: Dukungan penuh menggunakan Laravel Sail.

---

## 🛠️ Persiapan Awal

1. **Clone Repository**

    ```bash
    git clone
    cd desa-digital-api

    ```

2. **Salin Environment**
   cp .env.example .env

---

## 🐳 Opsi 1: Menjalankan dengan Docker Sail (Direkomendasikan)

    Gunakan metode ini jika Anda memiliki Docker Desktop terinstal.

1. **Instal Dependency (Jika PHP belum terinstal di host)**

    ```Bash
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v "$(pwd):/var/www/html" \
        -w /var/www/html \
        laravelsail/php84-composer:latest \
        composer install --ignore-platform-reqs

    ```

2. **Jalankan Container**

    ```Bash
    ./vendor/bin/sail up -d

    ```

3. **Inisialisasi Aplikasi**
    ```Bash
    ./vendor/bin/sail artisan key:generate
    ./vendor/bin/sail artisan install:api
    ./vendor/bin/sail artisan migrate --seed
    ```

---

## 💻 Opsi 2: Menjalankan Secara Konvensional

    Gunakan metode ini jika menggunakan XAMPP, Laragon, atau PHP native.

1. **Instal Dependency**

    ```Bash
    composer install

    ```

2. **Konfigurasi Database**
   Buka file .env, buat database manual bernama desa_digital_api, lalu sesuaikan:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=desa_digital_api
   DB_USERNAME=root
   DB_PASSWORD=

3. **Inisialisasi Aplikasi**

    ```Bash
    php artisan key:generate
    php artisan install:api
    php artisan migrate --seed

    ```

4. **Jalankan Server**
    ```Bash
    php artisan serve
    ```
