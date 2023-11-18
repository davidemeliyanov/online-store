<?php

namespace app\controllers;
use app\View;

class MainController
{
    public static function index()
    {
        View::render('home');
    }

    public static function about()
    {
        View::render('about');
    }
}