<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Services\healthService\Service;
use resources\views;

class healthController extends BaseController
{
    protected $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
    public function checkStatus()
    {
        $statusArray = $this->service->checkStatus();

        return $this->service->execute($statusArray);
    }
}