<?php
declare(strict_types=1);

namespace App\Services\HealthService;

use Illuminate\Support\Facades\DB;

/**
 * Сервис для проверки работоспособности приложения
 */
class Service
{
    /**
     * Возвращает массив статусов
     */
    public function execute(): array
    {
        return [
            $this->checkDatabase(),
        ];
    }

    /**
     * Возвращает статус базы данных mysql
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