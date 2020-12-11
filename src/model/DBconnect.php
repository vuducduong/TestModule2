<?php


namespace App\model;

USE PDO;
class DBconnect
{
    protected $user;
    protected $password;
    protected $dsn;

    public function __construct()
    {
        $this->user="root";
        $this->password="f";
        $this->dsn="mysql:host=localhost;dbname=test";
    }

    public function connect()
    {
        return new PDO($this->dsn,$this->user,$this->password);
    }
}