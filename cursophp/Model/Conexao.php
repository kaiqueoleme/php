<?php

namespace App\Model;

class Conexao
{
    private static $instance;

    private static function getConn()
    {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', '@Kaiqueleme17');
        }
        return self::$instance;
    }
}
