<?php
declare(strict_types=1);

namespace App\Services\healthService;

use Illuminate\Support\Facades\DB;
use App\Services\healthService\Service;
use App\Http\Controllers;

/**
* Параметр с переменными для обозначения названия, статуса и выявления ошибок
*/
class DTO
{
    private string $name;
    private string $status;
    private string $error;
    public function getName():string
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
    public function getError(): string
    {
        return $this->error ?? "";
    }
    public function setError(string $error)
    {
        $this->error = $error;
    }
}
