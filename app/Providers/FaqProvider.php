<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\FaqInterface;
use App\Repositories\FaqRepository;

class FaqProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(FaqInterface::class, FaqRepository::class);
    }
}
