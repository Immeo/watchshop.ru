<?php 

use watchshop\Router;

// пишем urls по умолчанию и с помощью регулярных выражений убираем лишнее, ^ начало строки, $ конец строки
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
// С помощью регулярных выражений сохраняем маршрут в массив 
Router::add('^(?P<controller>{a-z-)+)/?(?P<action>{a-z-)+)?$');
Router::add('^admin/?(?P<controller>{a-z-)+)/?(?P<action>{a-z-)+)?$');