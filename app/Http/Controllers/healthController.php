<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Services\HealthService\Service;


/**
* Healthcontroller подключаем базовый контроллер
*/

class HealthController extends BaseController
{
/**
* метод checkStatus чтобы получать проверенные данные от Service 
*/
    public function checkStatus()
    {
        $healthService = new Service();

        $statusArray = $healthService->execute();

        return view('status', ['statusArray' => $statusArray]);
    }
}
