<?php

namespace App\Providers;

use App\Models\Destino;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $destinos = Destino::all();
        view()->share('destinos', $destinos);

        /* $footerText = FooterText::first();
        View::share('footerText', $footerText); */
    }
}