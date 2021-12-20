<?php

namespace App\Providers;

use App\category;
use Illuminate\Support\ServiceProvider;

class catt extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('category', category::get());
    }
}
