<?php

namespace Workaholic\IpnIntegrator\Tests;

use Workaholic\IpnIntegrator\Providers\IpnServiceProvider;

use \Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            IpnServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}
