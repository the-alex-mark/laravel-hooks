# Laravel Hooks

Реализует систему «крючков», аналогичной CMS «WordPress», для кастомизации проекта.

<br>

## Установка

```bash
composer require the_alex_mark/laravel-hooks
```

<br>

Публикация конфигурации:
```bash
php artisan vendor:publish --provider="ProgLib\Hooks\Providers\HooksServiceProvider"
```