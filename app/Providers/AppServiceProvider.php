<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->composeLanguageSwitcher();
    }

    /**
     * Compose переключает(меняет) языки
     *
     * @return void
     */
    protected function composeLanguageSwitcher()
    {
        view()->composer('layouts.navigation', function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));            
    });
    }
}
