<?php

namespace Workaholic\IpnIntegrator\Tests\Unit;

use Workaholic\IpnIntegrator\Tests\TestCase;

class BaseTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }


    public function test_assert_true()
    {
        $this->assertTrue(true, 'This is true');
    }
}
