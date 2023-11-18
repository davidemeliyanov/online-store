<?php

namespace app\controllers;
use app\View;
use app\models\Products;

class ShopController
{
    public static function products($category)
    {
        $products = Products::getProductsByCategory($category);
        View::render('products', $products);
    }

}