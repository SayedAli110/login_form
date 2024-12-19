<?php

function isLogIn(){
    return $_SESSION['login'] ? true : false;
}



function getLoggedInUser(){
    return $_SESSION['login'] ?? null;
}


function getUserByEmail($email){
    global $pdo;
    // $currentUserId = getCurrentUserId();
    $stmt = $pdo->prepare("SELECT * FROM users where email = :email");
    $stmt->execute(['email'=>$email]);
    $record =  $stmt->fetchAll(PDO::FETCH_OBJ);
    return $record[0] ?? null;
}


/**** get id ****/
function getCurrentUserId(){
    return getLoggedInUser()->id;
}


function register($userData){
    global $pdo;
    if(!is_null(getUserByEmail($userData['email']))){
        $_SESSION['existEmail'] = true;
        return false;
    }
    $passHash = password_hash($userData['password'],PASSWORD_BCRYPT);
    $stmt = $pdo->prepare("INSERT into users (fullname,email,password,phone,gender) values (:userName,:userEmail,:passHash,:phone, :gender)");
    $stmt->execute(["userName"=>$userData['name'],"userEmail"=>$userData['email'],'passHash'=>$passHash, 'phone' => $userData['phone'], 'gender'=> $userData['gender']]);
    return $stmt->rowCount() ? true : false;
}


function redirect($url){
    header("location: $url");
}


function login($email,$pass){

    $user = getUserByEmail($email);
    if(is_null($user)){
        return false;
    }
    if(password_verify($pass,$user->password)){
        $_SESSION['login'] = $user;
        return true; 
    }
    return false;
}


function logout(){
    unset($_SESSION['login']);
}

?>