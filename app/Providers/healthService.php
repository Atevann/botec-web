<?php
declare(strict_types=1);

namespace App\Providers;
 
use Illuminate\Support\Facades\DB;

class State
{
    private $name;
    private $status;
    private $error;
    
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

class healthService
{
    public function checkStatus()
    {
        $dbStatus = $this->checkDatabase();
        $statusArray = [];
        $statusArray[] = $dbStatus;

        return view('status', ['statusArray'=>$statusArray]);
    }
    protected function checkDatabase()
    {
        $dbStatus = new State();
        $dbStatus->setName('Database');

        try
        {
            DB::connection()->getPdo();
            $dbStatus->setStatus('OK');
        } catch (\Exception $e)
        {
            $dbStatus->setStatus('Fail');
            $dbStatus->setError('- ' . $e->getMessage());
        }
        return $dbStatus;
    } 
}

