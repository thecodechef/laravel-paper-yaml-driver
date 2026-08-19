<div align="center">
    <h1>Laravel Paper Yaml Driver</h1>
</div>

<p align="center">
    <a href="https://packagist.org/packages/thecodechef/laravel-paper-yaml-driver"><img src="https://img.shields.io/packagist/v/thecodechef/laravel-paper-yaml-driver.svg?style=flat-square" alt="Packagist"></a>
    <a href="https://packagist.org/packages/thecodechef/laravel-paper-yaml-driver"><img src="https://img.shields.io/packagist/php-v/thecodechef/laravel-paper-yaml-driver.svg?style=flat-square" alt="PHP from Packagist"></a>
    <a href="https://packagist.org/packages/thecodechef/laravel-paper-yaml-driver"><img src="https://badge.laravel.cloud/badge/thecodechef/laravel-paper-yaml-driver?style=flat" alt="Laravel versions"></a>
    <a href="https://github.com/thecodechef/laravel-paper-yaml-driver/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/thecodechef/laravel-paper-yaml-driver/tests.yml?branch=main&label=Tests&style=flat-square"></a>
    <a href="https://packagist.org/packages/thecodechef/laravel-paper-yaml-driver"><img src="https://img.shields.io/packagist/dt/thecodechef/laravel-paper-yaml-driver.svg?style=flat-square" alt="Total Downloads"></a>
</p>

A YAML Driver for Laravel Paper

## Installation

You can install the package via Composer:

```bash
composer require thecodechef/laravel-paper-yaml-driver
```

You may publish all of the package's resources at once:

```bash
php artisan vendor:publish --tag="laravel-paper-yaml-driver"
```

Or, you may publish each resource individually:

### Publishing the Configuration File

```bash
php artisan vendor:publish --tag="laravel-paper-yaml-driver-config"
```

### Publishing and Running the Migrations

```bash
php artisan vendor:publish --tag="laravel-paper-yaml-driver-migrations"
php artisan migrate
```

### Publishing the Views

```bash
php artisan vendor:publish --tag="laravel-paper-yaml-driver-views"
```

### Publishing the Translations

```bash
php artisan vendor:publish --tag="laravel-paper-yaml-driver-lang"
```

### Publishing the Public Assets

```bash
php artisan vendor:publish --tag="laravel-paper-yaml-driver-assets"
```

## Usage

<!-- Add a basic usage example here. -->

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Thank you for considering contributing to Laravel Paper Yaml Driver! Please review our [contributing guide](.github/CONTRIBUTING.md) to get started.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [Jeremy Bolding](https://github.com/thecodechef)
- [All Contributors](../../contributors)

## License

Laravel Paper Yaml Driver is open-sourced software licensed under the [MIT license](LICENSE.md).
