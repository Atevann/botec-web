<?php
declare(strict_types=1);

namespace App\Services\HealthService;


/**
* DTO для описания статуса работоспособности приложения
*/
class DTO
{
/**
* переменная для названия базы данных
*/

    private string $name;

/**
* переменная для выявления статуса базы данных
*/

    private string $status;

/**
* переменная для выявления ошибки базы данных
*/  

    private ?\Exception $error = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getStatus(): string 
    {
        return $this->status;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }  

    public function getError(): ?\Exception
    {
        return $this->error;
    }
    
    public function setError(?\Exception $error)
    {
        $this->error = $error;
    }
}
