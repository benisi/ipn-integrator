<?php

namespace Workaholic\IpnIntegrator\Tests\Feature;

use Workaholic\IpnIntegrator\Tests\TestCase;

class IpnControllerTest extends TestCase
{
    public function testCanReceiveRequest()
    {
        $response = $this->post('api\ipn-integration\jvzoo');
        $response->assertStatus(200);
    }
}
