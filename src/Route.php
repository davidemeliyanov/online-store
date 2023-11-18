<?php

namespace app;
use app\View;

class Route
{
    // Создаем массивы роутов
    public static $getRoutes = [];
    public static $postRoutes = [];


    // Метод, который записывает в массивы роутов путь и функцию-коллбек
    public static function get($uri, $cb)
    {
        // если в роуте есть сегмент любых символов между {} заменить его на (.*)
        $uri = preg_replace('/{[^}]+}/', '(.*)', $uri);
        self::$getRoutes[$uri] = $cb; // помещаем в качестве ключа путь URI и в качестве значения массива функцию коллбек, взятую из функции get при ее вызове
    }
    // Аналогичный процесс для массива POST-запросов
    public static function post($uri, $cb)
    {
        $uri = preg_replace('/{[^}]+}/', '(.*)', $uri);
        self::$postRoutes[$uri] = $cb;
    }

    // Функция, выполняющая роутинг
    public static function run()
    {
        // Берем из адресной строки браузера путь
        $currentUri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD']; // Получаем метод
        
        // $cb = self::$routes[$currentUri] ?? null;
        // Создаем новый массив роутов
        $routes = [];
        // Проверяем если метод запроса гет - запускаем массив гет-запросов, если же пост - то пост-массив
        if($method == 'GET') {
            $routes = self::$getRoutes;
        } else if ($method == 'POST') {
            $routes = self::$postRoutes;
        }
        
        $cb = null;
        $params = [];
        // Разбиваем роуты на параметры
        foreach($routes as $route => $handler)
        {
            if(preg_match("%^{$route}$%", $currentUri, $matches) === 1)
            {
                $cb = $handler;
                unset($matches[0]);
                $params = $matches;
                break;
            }
        }
        // Если коллбек существует - выполняем его и передаем ему параметры роута в качестве аргументов коллбек-функции, которой может быть и метод класса контроллера
        if($cb) {
            call_user_func($cb, ...$params);
        } else {
            // если пути нет - рендерим страницу 404
            View::render('404');
        }
    }

}