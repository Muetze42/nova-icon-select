<?php

namespace Bernhardh\NovaIconSelect;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-icon-select', __DIR__.'/../dist/js/field.js');
            Nova::style('nova-icon-select', __DIR__.'/../dist/css/field.css');
        });

        $this->publishes([
            __DIR__.'/../config/nova-icon-select-fa-free.php' => config_path('nova-icon-select-fa-free.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/nova-icon-select-fa-free.php', 'nova-icon-select-fa-free');
    }
}
