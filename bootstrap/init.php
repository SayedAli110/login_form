<?php
session_start();
try {
    $pdo = new PDO("mysql:dbname=login_form;host=localhost",'root','');
} catch (PDOException $e) {
    echo "cannot connect to database!!! ".$e->getMessage().PHP_EOL;
    die();
}

include "C:/xampp/htdocs/project.php/login-form-excercise/auth/Register.php";