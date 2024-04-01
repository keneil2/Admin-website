<?php 
spl_autoload_register(function ($class){
   require_once strtolower($class).".php";
});
$router=new Router();
$router->setUri("/keneil%20samms-march-2024-Assignment_Mini%20project/Admin_Webpage/index.php/login","login.view.php");
$router->setUri("/keneil%20samms-march-2024-Assignment_Mini%20project/Admin_Webpage/index.php/login_contrl","login.controller.php");
var_dump($router->getUri());
$router->runRouter();

  
