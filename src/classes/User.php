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
        $query = db()->select('users', '*')->where('name', $name, )->fetchAssoc();
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

    public string $twitter;
    public string $youtube;
    public string $discord;
    public string $nationality;
    public string $about;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function logged(string $name): bool
    {
        if (!isset($_SESSION['name'])) {
            header('Location: /auth/login');
            exit();
        } else {
            return true;
        }
    }

    public function getSocials($name)
    {
        $query = db()->select('users', 'twitter, youtube, discord')->where('name', $name)->fetchAssoc();
        return $query;
    }

    public function getAbout($name)
    {
        $query = db()->select('users', 'about')->where('name', $name)->fetchAssoc();
        return $query['about'];
    }

    public function getAimbeastRank($name)
    {
        $query = db()->select('users', 'ab_rank')->where('name', $name)->fetchAssoc();
        return $query['ab_rank'];
    }

    public function getAimbeastRank2($name)
    {
        $query = db()->select('users', 'ab2_rank')->where('name', $name)->fetchAssoc();
        return $query['ab2_rank'];
    }
}
