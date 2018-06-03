<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Assistance;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $assistance = Assistance::all();
      view()->share('assistance', $assistance);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
