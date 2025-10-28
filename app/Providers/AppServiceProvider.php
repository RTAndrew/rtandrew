<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Database\CustomPostgresConnector;
use Illuminate\Database\Connectors\ConnectionFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // Force HTTPS when on
        if(config('app.env') !== 'local') {
            \URL::forceScheme('https');
        }

        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('db.connector.pgsql', CustomPostgresConnector::class);
    }
}
