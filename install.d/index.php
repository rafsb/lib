<?php
header("Access-Control-Allow-Origin: *");
// header('Content-type: text/html; charset=utf-8');
// header('Content-type: application/json; charset=utf-8');
// header('Content-type: text/plain; charset=utf-8');

@session_start();

require "lib" . DIRECTORY_SEPARATOR . "php" . DIRECTORY_SEPARATOR . "constants.php";
require "lib" . DS . "php" . DS . "autoload.php";
require "webroot" . DS . "App.php";

if(!User::logged() && Request::cook("USER") && Request::cook("ACTIVE")) Request::sess("USER",Request::cook("USER"));

$args = Request::in("_");
if($args)
{   
    $args = explode('/',$args);
    $class_name  = ucfirst($args[0]);
    $method_name = isset($args[1]) && $args[1] ? $args[1] : "render";
    
    try
    {
        // echo $class_name . "->" . $method_name . "(" . implode(",", array_slice($args,2))  . ")"; die;
        $class_instance = new $class_name($args,sizeof($args));
        echo $class_instance->$method_name(...array_slice($args,2));
    }
    catch (Exception $e)
    {
        IO::debug($e);
    }

}else \App::init();

flush();
