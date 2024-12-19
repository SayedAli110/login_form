<?php

include "bootstrap/init.php";


if(isset($_GET['logout']) && $_GET['logout']== "1"){
    logout();
}


if(!isLogIn()){

    redirect('http://project.php/login-form-excercise/auth.php');
}
// // var_dump($_SESSION['login']);
$user = getLoggedInUser();




include 'tpl/tpl.index.php';
