<?php
//require 'Model/modelreg.php';
//require 'View/viewreg.php';
//require 'Controller/controllerreg.php';
//require 'Model/modellog.php';
//require 'View/viewlog.php';

$url=$_GET['url'];

require 'Controller/' . $url .'.php';
$cont= new $url;



//$model = new myModel();
//$controller = new Controller($model);
//$view = new View($controller, $model);
//echo $view->output();


?>