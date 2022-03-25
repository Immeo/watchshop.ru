<?php
require_once dirname(__DIR__) . "/config/init.php";
require_once LIBS . '/debugFun.php';

new \watchshop\App;


echo "Somebody text<br>";

throw new Exception("ошибка 404", 404);


debug(\watchshop\App::$app->getProperties());