<?php

namespace Workaholic\IpnIntegrator\Controllers;

class IpnController extends Controller
{
    public function handleIntegrations()
    {
        return response()->json(['message' => "received"], 200);
    }
}
