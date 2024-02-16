<?php
declare(strict_types=1);

namespace App\Services\HealthService;
 
use Illuminate\Support\Facades\DB;
use App\Services\HealthService\DTO;


/**
* Сервис для проверки работоспособности приложения
*/

class Service
{
/**
* Метод execute для получения данных от метода checkDatabase и для передачи в HealthController
*/

    public function execute(): array
    {
        $statusArray = [$this->checkDatabase()];

        return $statusArray;
    }
/**
* Метод checkDatabase для проверки работоспособности базы данных
*/

    protected function checkDatabase(): DTO
    {
        $dbStatus = new DTO();
        $dbStatus->setName('Database');

        try {
            DB::connection()->getPdo();
            $dbStatus->setStatus('OK');
        } catch (\Exception $e) {
            $dbStatus->setStatus('Fail');
            $dbStatus->setError($e);
        }
        
        return $dbStatus;
    } 
}
