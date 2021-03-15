<?php
//подключаем конфиг для создания пути до  контроллера
include_once '..\config\config.php';



/**
 * функция загрузки страницы
 */
function load_page($controllerName , $actionName = 'index' ){
  //подключаем контроллер
  include_once PathPrefix . $controllerName . PathPostfix;

  $function = $actionName . 'Action';
  $function();
}

 ?>
