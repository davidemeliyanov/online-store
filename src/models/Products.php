<?php

namespace app\models;
use app\Db;

class Products
{
    public static function all()
    {
        $db = new Db();
        $stmt = $db->connect()->query('SELECT * FROM products');
        $stmt = $stmt->fetchAll();
        return $stmt;
    }

    public static function getProductsByCategory($category)
    {
        $db = new Db();
        $stmt = $db->connect()->query("SELECT * FROM products WHERE category = '$category'");
        $stmt = $stmt->fetchAll();
        return $stmt;
    }
}