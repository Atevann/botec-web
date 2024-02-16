<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Services\HealthService\Service;


/**
 *  Контроллер состояния сервисов
 */
class HealthController extends BaseController
{
    /**
     * Возвращает состояние всех сервисов
     */
    public function checkStatus()
    {
        $healthService = new Service();
        $statusArray   = $healthService->execute();

        return view('status', ['statusArray' => $statusArray]);
    }
}
