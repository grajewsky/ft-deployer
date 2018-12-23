<?php

namespace App\Providers;

use App\Services\Deployer;
use App\Config\DeployerConfig;
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
        $this->app->singleton(Deployer::class, function($app) {
            return new Deployer(app(DeployerConfig::class));
        });
    }
}
