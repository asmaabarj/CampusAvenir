<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ContactInterface;
use App\Repositories\ContactRepository;

class ContactProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ContactInterface::class, ContactRepository::class);
    }
}
