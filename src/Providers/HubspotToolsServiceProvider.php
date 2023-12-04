<?php

namespace RandikaSrimal\HubspotTools\Providers;

use Illuminate\Support\ServiceProvider;
use RandikaSrimal\HubspotTools\Console\Commands\CopyProperties;

class HubspotToolsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CopyProperties::class,
            ]);
        }
    }

}