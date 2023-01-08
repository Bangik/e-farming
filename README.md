# Aplikasi E-Farming

Dikembangkan dengan Laravel 8 dan PHP 7.4

## Installation

-   Clone aplikasi dari github

-   Masuk ke directory nya

-   Install package

    ```bash
      composer install
    ```

-   Copy file .env.example dan rename menjadi .env

-   Setting database pada file .env dan sesuaikan dengan database di local

    `DB_DATABASE=`

    `DB_USERNAME=`

    `DB_PASSWORD=`

-   Generate Key

    ```bash
      php artisan key:generate
    ```

-   Jalankan migration

    ```bash
      php artisan migrate:fresh
    ```

-   Jalankan Laravel

    ```bash
      php artisan serve
    ```

## Contributing

Silakan Fork Repository lalu lakukan update kode

Jika telah selesai update kode, lakukan Open Pull Request
