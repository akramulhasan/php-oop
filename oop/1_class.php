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

$user1 = new User('Akbar Ali', 'akrab@gmail.com');


$user2 =  new User('Umar', 'um@gmail.com');

$user2->setStatus('Inactive');

$user2->getStatus();

//var_dump($user1);
