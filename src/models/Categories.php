<?php

namespace app\models;
use app\Db;

class Categories
{
    public static function all()
    {
        $db = new Db();
        $stmt = $db->connect()->query('SELECT * FROM categories');
        $stmt = $stmt->fetchAll();
        return $stmt;
    }
}