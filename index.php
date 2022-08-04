<?php

$controller = 'test';

// FrontController principal para iniciar la aplicación

if(!isset($_REQUEST['c']))
{    
    $controller = ucwords($controller) . 'Controller';
    require_once "controller/$controller.php";
    $controller = new $controller;
    $controller->Index();    
}
else
{
    // Nombre del controlador y acción que se quiere ejecutar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instancia del controlador
    $controller = ucwords($controller) . 'Controller';
    require_once "controller/$controller.php";
    $controller = new $controller;
    
    // Llamada al método dentro del controlador
    call_user_func( array( $controller, $accion ) );
}
