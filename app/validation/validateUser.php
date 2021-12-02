<?php
/*
function validateUser($user) {
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, "username is required!");
    }
    if (empty($user['email'])) {
        array_push($errors, "email is required!");
    }
    if (empty($user['password'])) {
        array_push($errors, "password is required!");
    }
    if (empty($user['c_password'])) {
        array_push($errors, "password confirmation is required!");
    }
    if (empty($user['c_password']) !== $_POST['password']) {
        array_push($errors, "password does not match!");
    }    

   return $errors;
}
*/



function validateUser($user) {
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, "username is required!");
    }
    if (empty($user['email'])) {
        array_push($errors, "email is required!");
    }
    if (empty($user['password'])) {
        array_push($errors, "password is required!");
    }
    if (empty($user['c_password'])) {
        array_push($errors, "password confirmation is required!");
    }
    if ($user['c_password'] !== $user['password']) {
        array_push($errors, "password does not match!");
    }    
 
    // $existingUser = selectOne('users', ['email' => $user['email']]);
    // if(isset($existingUser)){
    //     array_push($errors, "email  already exists");
    // }
   return $errors;
}





function validateLogin($user) {
    $errors = array();
    if (empty($user['username'])) {
        array_push($errors, "username is required!");
    }
    if (empty($user['password'])) {
        array_push($errors, "password is required!");
    }

   return $errors;
}











