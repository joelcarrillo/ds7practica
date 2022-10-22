<?php
require_once 'config/config.php';
class Db
{
    
    public static function StartUp()
    {
        $pdo = new PDO('mysql:dbname=login;host=localhost', 'root', 'Contra123!');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}