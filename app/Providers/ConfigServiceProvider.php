<?php


namespace App\Providers;

use App\Config\DeployerConfig;
use Illuminate\Support\ServiceProvider;


class ConfigServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->singleton(DeployerConfig::class, function($app) {
            return new DeployerConfig();
        });
        config(app(DeployerConfig::class)->getConfig());
    }
}
