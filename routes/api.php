<?php

use Illuminate\Support\Facades\Route;
use Workaholic\IpnIntegrator\Controllers\IpnController;

Route::post('api\ipn-integration\jvzoo', [IpnController::class, 'handleIntegrations']);
