<?php
declare(strict_types=1);

namespace App\Services\HealthService;


/**
 * DTO для описания статуса работоспособности приложения
 */
class DTO
{
    /**
     * Название сервиса
     */
    private string $name;

    /**
     * Статус (OK/Fail)
     */
    private string $status;

    /**
     * Ошибка состояния сервиса
     */
    private ?\Exception $error = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getError(): ?\Exception
    {
        return $this->error;
    }

    public function setError(?\Exception $error): void
    {
        $this->error = $error;
    }
}
