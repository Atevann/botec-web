<?php
declare(strict_types=1);

namespace App\Services\healthService;
 
use App\Http\Controllers\healthController;
use Illuminate\Support\Facades\DB;
use App\Services\healthService\DTO;
use Spatie\LaravelIgnition\Http\Controllers\HealthCheckController;


/**
* Параметр для выявления статуса базы данных
*/
class Service
{
    public function execute(): array
    {
        $statusArray = [$this->checkDatabase()];

        return $statusArray;
    }
    protected function checkDatabase(): DTO
    {
        $dbStatus = new DTO();
        $dbStatus->setName('Database');

        try {
            DB::connection()->getPdo();
            $dbStatus->setStatus('OK');
        } catch (\Exception $e) {
            $dbStatus->setStatus('Fail');
            $dbStatus->setError('- ' . $e->getMessage());
        }
        
        return $dbStatus;
    } 
}

