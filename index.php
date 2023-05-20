<?php

// ROUTER
define('APPROOT', dirname(__FILE__));

if(empty($_REQUEST['module'])){
  die("<h1>Module not specified, please check the url.</h1>");
}

if(empty($_REQUEST['action'])){
  die("<h1>Action not specified, please check the url.</h1>");
}

$module = $_REQUEST['module'];
$action = $_REQUEST['action'];
$controller = $module."Controller";

if(file_exists("controller/$controller.php")){
  include("controller/$controller.php");
  $activeController = new $controller(); // loginController - in this case
  if(method_exists($activeController, $action)){ // method_exists(object_or_class, method)
    $activeController->$action($_REQUEST);
  } else{
    die("<h1>Specified action $action of this module = $module is not exist.</h1> <p>Please check the url.</p>");
  }
} else{
  die("<h1>Specified module $module not exist.</h1> <p>please check the url.</p>");
}


?>