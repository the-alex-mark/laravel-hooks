<?php

namespace ProgLib\Hooks\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use ProgLib\Hooks\Foundation\HooksService;

/**
 *
 */
class HooksServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return [ 'hooks' ];
    }

    /**
     * Boot service provider.
     *
     * @return void
     */
    public function boot() {

        // ...
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        // Регистрация фасада
        $this->app->bind('hooks', function ($app) {
            return new HooksService();
        });

        // Регистрация пользовательской директивы для шаблонизатора «Blade»
        Blade::directive('action', function ($expression) {

            // TODO: Реализовать пользовательскую директиву для шаблонизатора «Blade»
            return '';
        });
    }
}