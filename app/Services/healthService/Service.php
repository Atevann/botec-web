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
    public function execute($statusArray)
    {
        return view('status', ['statusArray' => $statusArray]);
    }
    public function checkStatus()
    {
        $dbStatus = $this->checkDatabase();
        $statusArray = [];
        $statusArray[] = $dbStatus;

        return $statusArray;
    }
    protected function checkDatabase()
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

