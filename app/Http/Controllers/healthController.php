<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Services\healthService\Service;
use resources\views;

class HealthController extends BaseController
{
    public function checkStatus()
    {
        $healthService = new Service();

        $statusArray = $healthService->execute();

        return view('status', ['statusArray' => $statusArray]);
    }
}