<?php

include_once '..\library\main_func.php';


  // Определяем контроллер, ucfirst - первая буква в апперкейс
  $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
  $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';


  load_page($controllerName, $actionName );





 ?>
