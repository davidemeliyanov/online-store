<?php

namespace app;
use \PDO;

class Db
{
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect()
    {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "testing";
        $this->charset = "utf8mb4";

        $dsn = "mysql:host=" . $this->host . ";dbname=". $this->dbname . ";charset=". $this->charset;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}