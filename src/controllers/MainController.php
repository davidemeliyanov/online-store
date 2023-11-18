<?php

namespace app\controllers;
use app\View;
use app\models\Categories;

class MainController
{
    public static function index()
    {
        $categories = Categories::all();
        View::render('home', $categories);
    }

    public static function about()
    {
        View::render('about');
    }
}