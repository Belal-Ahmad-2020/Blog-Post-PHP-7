<?php

include(ROOT . "/app/database/db.php");
include(ROOT . "/app/validation/validateUser.php");


$table = 'users';

// $admin_users = selectAll($table);

$errors = array();
$id = '';
$username = '';
$admin = '';
$email = '';
$password = '';
$c_password = '';
 
if (isset($_POST['register'])) {
    $errors = validateUser($_POST);
    if (count($errors) == 0) {
        unset($_POST['register'], $_POST['c_password']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create('users', $_POST);
        $user = selectOne('users', ['id'=>$user_id]); //condition id='$user_id'               
        // user logged in
        // $_SESSION['id']= $user['id'];
        // $_SESSION['username']= $user['username'];
        // $_SESSION['admin']=$user['admin'];
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['type'] = "success";
        //header("location:" . URL . "/index.php");
        
        dd($user);
        //exit();
    }
    else { // if there is some error keep value in the form
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
    }
}

// if (isset($_POST['login'])) {
//     $errors = validateLogin($_POST);

//     if (count($errors) === 0) {
//         $user = selectOne($table, ['username' => $_POST['username']]);

//         if ($user && password_verify($_POST['password'], $user['password'])) {
//             loginUser($user);
//         } else {
//            array_push($errors, 'Wrong credentials');
//         }
//     }

//     $username = $_POST['username'];
//     $password = $_POST['password'];
// }




