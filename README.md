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


## Usage

```php
# app/Providers/AppServiceProviders.php

use JacobJoergensen\LaravelPaper\Drivers\DriverRegistry;
use LaravelPaper\YamlDriver\YamlDriver; 

# ...

public function boot(): void
{
    app(DriverRegistry::class)->register('yaml', YamlDriver::class);
}
```

```php
<?php

# app/Models/Post.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use JacobJoergensen\LaravelPaper\Attributes\ContentPath;
use JacobJoergensen\LaravelPaper\Attributes\Driver;
use JacobJoergensen\LaravelPaper\Attributes\Timestamps;
use JacobJoergensen\LaravelPaper\Paper;

#[Driver('yaml')]
#[ContentPath('content/users')]
#[Timestamps]
class Post extends Model
{
    use Paper;
}
```

```yaml
# content/first-post.ya?ml

id: 1
title: First Post
author: Jeremy Bolding
draft: true
tags:
  - laravel-paper
  - yaml
categories:
  - php
  - laravel
content: |
  this is my first post
```

```blade
{{-- resources/views/posts/list.blade.php --}}

@php
    $posts = \App\Models\Post::all();
@endphp
<div class="posts">
    @foreach($posts as $post)
        <a href="{{ $post->permalink }}" class="post">
            <span class="post-title">{{ $post->title }}</span>
            <span class="post-author">By: {{ $post->author }}</span>
            <span class="post-date">{{ $post->updated_at ? "Updated: $post->updated_at" : "Posted: $post->created_at" }}</span>
            <div class="post-tags">
                @foreach($post->tags as $tag)
                    <span class="post-tag">{{ $tag }}</span>
                @endforeach
            </div>
            <div class="post-categories">
                @foreach($post->categories as $category)
                    <span class="post-category">{{ $category }}</span>
                @endforeach
            </div>
            <span class="post-date">Posted: {{ $post->created_at }}</span>
            <span class="post-summary">{{ Str::limit($post->content, 30), '...' }}</span>
        </a>
    @endforeach
</div>
```

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
