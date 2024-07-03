<?php

class UserRepo
{
    public string $name;
    public string $password;
    public function __construct(string $name, string $password)
    {
        $this->name = $name;
        $this->name = $password;
    }

    public function get(string $name, string $password)
    {
        echo 'huj';
        $query = db()->select('users', '*')->where('name', $name,)->fetchAssoc();
        print_r($query);
        if (!empty($query)) {
            if (password_verify($password, $query['password'])) {
                echo 'kaka';
                return $query;
            } else {
                return null;
            }
        }
    }
}

class User
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function logged(string $name)
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /auth/login');
            exit();
        } else {
            return true;
        }
    }
}
