<?php
declare(strict_types=1);

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
    public function boot(): void
    {
        $this->addAvailableLocalesToNavigationView();
    }

    /**
     * Compose переключает(меняет) языки
     */
    protected function addAvailableLocalesToNavigationView(): void
    {
        view()->composer('layouts.navigation', function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));            
        });
    }
}
