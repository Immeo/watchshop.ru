<?php

define("DEBUG", 0);
define("ROOT", dirname(__DIR__));
define("WWWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/watchshop/core');
define("LIBS", ROOT . '/vendor/watchshop/core/libs');
define("CACHE", ROOT . '/temp/cache');
define("CONFIG", ROOT . '/config');
define("TEMPLATE", 'default');

// сохрняем путь в переменную
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// удаляем index.php в конце пути
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// удаляем public в пути
$app_path = str_replace('/public/', '', $app_path);

define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';