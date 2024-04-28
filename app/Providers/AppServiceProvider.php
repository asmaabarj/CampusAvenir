<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\FaqProvider;
use App\Providers\ContactProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(FaqProvider::class);
        $this->app->register(ContactProvider::class);
    }
}
