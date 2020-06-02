<?php

namespace Workaholic\IpnIntegrator\Providers;

use Illuminate\Support\ServiceProvider;

class IpnServiceProvider extends ServiceProvider
{
    public $ds = DIRECTORY_SEPARATOR;

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "{$this->ds}..{$this->ds}..{$this->ds}routes{$this->ds}api.php");
    }

    public function register()
    {
    }
}
