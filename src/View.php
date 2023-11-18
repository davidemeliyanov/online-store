<?php

namespace app;

use app\models\Pages;
use app\models\Seo;
use app\models\Settings;

class View
{
    public static function render($view, $data = null)
    {
        ob_start();
        include __DIR__ . "/views/$view.php";
        $content = ob_get_clean();
        include_once __DIR__ . "/views/layouts/default.php";
    }
}