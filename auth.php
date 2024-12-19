<?php

include "bootstrap/init.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $action = $_GET['action'];
    $params = $_POST;
    if($action == "register"){
        $result = register($params);
        if(!$result){
            if($_SESSION['existEmail']) var_dump('this Email is already exist');
        } 
    }
    else if($action == "login"){
        $result = login($params['email'],$params['password']);
        $result ? redirect('http://project.php/login-form-excercise/index.php') : var_dump("Email or Password is incorrect!");
    }
}
include "tpl/tpl.register.php";