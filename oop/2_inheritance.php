<?php

class User
{
    public $name;
    public $email;

    private $status = 'active';

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }


    public function login()
    {
        echo $this->name . ' logged in';
    }

    public function getStatus()
    {
        echo $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}

class Admin extends User
{
    public $level;

    public function __construct($name, $email, $level)
    {
        $this->level = $level;
        parent::__construct($name, $email);
    }
}

$admin1 = new Admin('AK', 'admin@admin.com', 5);



var_dump($admin1);
