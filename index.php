<?php
require('model.php');
require('view.php');
require('controller.php');

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action']))
{
  $controller->{$_GET['action']}();
}

echo $view->output();
