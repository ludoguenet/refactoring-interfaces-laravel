<?php

namespace App\Providers;

use App\Contracts\BlablaContract;
use App\Contracts\BlablaServiceInterface;
use App\Services\SuperBlablaService;
use App\Services\DefaultBlablaService;
use App\Services\SendDefaultBlablaService;
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
        $class = config('services.blabla.ultra');
        $this->app->bind(BlablaServiceInterface::class, $class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
