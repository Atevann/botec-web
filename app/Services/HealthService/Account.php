<?php
declare(strict_types=1);

namespace App\Services\HealthService;


/**
 * DTO (Data transfer object) для описания статуса работоспособности приложения
 */
class Account {
    private $login;

    private $password;

    private $email;

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail ($email): void
    {
        $this->email = $email;
    }
}