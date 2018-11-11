<?php

namespace tranlongpc\LaravelFileManager;

use Illuminate\Support\ServiceProvider;

class FileManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'file-manager');

        // language files
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'file-manager');

        // publish config
        $this->publishes([
            __DIR__.'/../config/file-manager.php' => config_path('file-manager.php'),
        ], 'fm-config');

        // publish views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/file-manager'),
        ], 'fm-views');

        // publish language files
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/file-manager'),
        ], 'fm-lang');

        // publish js and css files - vue-file-manager module
        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/file-manager'),
        ], 'fm-assets');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
