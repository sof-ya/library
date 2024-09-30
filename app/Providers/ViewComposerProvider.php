<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Views\Composers\MainPageCoreComposer;


class ViewComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    protected $policies = [
        //
    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        \View::composer('Pages.main', MainPageCoreComposer::class);
    }
}
