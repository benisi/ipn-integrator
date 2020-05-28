<?php

namespace Workaholic\IpnIntegrator\Tests;

use Workaholic\IpnIntegrator\Providers\IpnServiceProvider;

use \Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            IpnServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }

    public function test_assert_true()
    {
        $this->assertTrue(true, 'This is true');
    }
}
