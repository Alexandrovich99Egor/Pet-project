<?php
require_once ('const.php');

if (!defined('ADM'))
{
    exit;
}

class Connection
{
    private $host;
    private $user_name;
    private $password;
    private $db;
    public $connection;
    public $query;

    public function __construct(string $host = 'localhost:3306', string $user_name = 'root', string $password = '', string $db = 'root')
    {
        $this->host      = $host;
        $this->user_name = $user_name;
        $this->password  = $password;
        $this->db        = $db;
    }

    public function getConnect(): object
    {
        $this->connection = mysqli_connect($this->host, $this->user_name, $this->password, $this->db);
        if (!$this->connection)
        {
            die('<p>connect error with db ' . mysqli_connect_error() . '</p>');
        }
        return $this->connection;
    }


}