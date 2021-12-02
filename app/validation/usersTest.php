<?php 
//when we include path file in the register file now it is avaliable in this file

include(ROOT . "/app/database/db.php");
include(ROOT . "/app/validation/validateUser.php");

/* 1
$username = $email = $password = $c_password = $email =""; 
if (isset($_POST['register'])) {
    unset($_POST['register'], $_POST['c_password']);
    $_POST['admin'] = 0;
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user_id = create('users', $_POST);
    $user = selectOne('users', ['id' => $user_id]); //condition id='$user_id'
    dd($_POST);
}
*/


/* 2
if (isset($_POST['register'])) {
    $errors = array();
    if (empty($_POST['username'])) {
        array_push($errors, "username is required!");
    }
    if (empty($_POST['email'])) {
        array_push($errors, "email is required!");
    }
    if (empty($_POST['password'])) {
        array_push($errors, "password is required!");
    }
    if (empty($_POST['c_password'])) {
        array_push($errors, "password confirmation is required!");
    }
    if (empty($_POST['c_password']) !== $_POST['password']) {
        array_push($errors, "password does not match!");
    }    
    dd($errors);
    unset($_POST['register'], $_POST['c_password']);
    $_POST['admin'] = 0;
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user_id = create('users', $_POST);
    $user = selectOne('users', ['id'=>$user_id]); //condition id='$user_id'
    dd($_POST);
}
*/

/* 3
$username = $email = $password = $c_password =""; 
if (isset($_POST['register'])) {
    $errors = array();
    if (empty($_POST['username'])) {
        array_push($errors, "username is required!");
    }
    if (empty($_POST['email'])) {
        array_push($errors, "email is required!");
    }
    if (empty($_POST['password'])) {
        array_push($errors, "password is required!");
    }
    if (empty($_POST['c_password'])) {
        array_push($errors, "password confirmation is required!");
    }
    if (empty($_POST['c_password']) !== $_POST['password']) {
        array_push($errors, "password does not match!");
    }    
    if (count($errors) == 0) {
        unset($_POST['register'], $_POST['c_password']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create('users', $_POST);
        $user = selectOne('users', ['id'=>$user_id]); //condition id='$user_id'               
    }
    else { // if there is some error keep value in the form
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
    }
}


*/
/* 4
$errors = array();
$username = $email = $password = $c_password =""; 
if (isset($_POST['register'])) {
    $errors = validateUser($_POST);
    if (count($errors) == 0) {
        unset($_POST['register'], $_POST['c_password']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create('users', $_POST);
        $user = selectOne('users', ['id'=>$user_id]); //condition id='$user_id'               
    }
    else { // if there is some error keep value in the form
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
    }
}

*/





//login form
/*
if (isset($_POST['login'])) {
    $errors = validateLogin($_POST);
    // dd($_POST);
    if (count($errors) == 0) {
        $user = selectOne('users', ['username' => $_POST['username']]);
        //password_verify(text itself, password)  it compares to passwords
        if ($user && password_verify($_POST['password'], $_POST['password'])) {            
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['admin'] = $user['admin'];
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['type'] = "success";
            
            if (isset($_SESSION['admin'])) {
                header("location:" . URL . "/admin/dashboard.php" );               
            }
            else {
                header("location:" . URL . "/index.php" );            
            }
            
        }        
        else {
            array_push($errors, "Username/Password is wrong!");
        }    
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

}

*/




//login form
// if (isset($_POST['login'])) {
//     $errors = validateLogin($_POST);
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     if (count($errors) == 0) {
//         $users = selectOne('users', ['username' => $_POST['username'] ]);
          
//         if ($users && password_verify($password, $users["password"])) {            
//             $_SESSION['id'] = $users['id'];
//             $_SESSION['username'] = $users['username'];
//             $_SESSION['admin'] = $users['admin'];
//             $_SESSION['message'] = "You are now logged in";
//             $_SESSION['type'] = "success";
            
//                 if (isset($_SESSION['admin'])) {
//                     header("location:" . URL . "/admin/dashboard.php" );               
//                 }
//                 else {
//                     header("location:" . URL . "/index.php" );            
//                 }
            
//         }        
//         else {
//             array_push($errors, "Username/Password is wrong!");
//         }    
//     }
// }





//register 
/*
$errors = array();
$id = $username = $email = $password = $c_password =""; 
if (isset($_POST['register'])) {
    $errors = validateUser($_POST);
    if (count($errors) == 0) {
        unset($_POST['register'], $_POST['c_password']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);        
        $user_id = create('users', $_POST);
        $user = selectOne('users', ['id'=> $user_id]); //condition id='$user_id'               
        //dd($_POST);// log user in 
        
    $_SESSION['id'] = $user_id;
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php'); 
    } else {
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();    
    }
    else { // if there is some error keep value in the form
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
    }
}

//login form
if (isset($_POST['login'])) {
    dd($_POST);
    $errors = validateLogin($user);
    if (count($errors) === 0) {
        $user = selectOne('users', ['username' => $_POST['username']]);
        if ($user && password_verify($_POST['password'], $user['password'])) {
             $_SESSION['id'] = $user['id'];
             $_SESSION['username'] = $user['username'];
             $_SESSION['admin'] = $user['admin'];
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['type'] = "success";
            
                if (isset($_SESSION['admin'])) {
                    header("location:" . URL . "/admin/dashboard.php" );               
                }
                else {
                    header("location:" . URL . "/index.php" );            
                }
            
        } else {
            array_push($errors, "Username/Password is wrong!");
        }
        
    }
}

*/

/*
function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php'); 
    } else {
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();
}

$errors = array();
$username = $email = $password = $c_password =""; 
if (isset($_POST['register'])) {
    $errors = validateUser($_POST);
    $username = $_POST['username'];
    if (count($errors) == 0) {
        unset($_POST['register'], $_POST['c_password']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);        
        $user_id = create('users', $_POST);
        $user = selectOne('users', ['id' => $user_id]);                
        // log user in 
        loginUser($user);
    }
    else { 
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
    }
}

//login form
if (isset($_POST['login'])) {
    $errors = validateLogin($_POST);

    if (count($errors) == 0) {
        $user = selectOne('users', ['username' => $_POST['username']]);
        if ($user && password_verify($_POST['password'], $user['password']) ) {            
            //log user in
            loginUser($user);
        }        
        else {
            array_push($errors, "Username/Password is wrong!");
        }    
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

}
*/









function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php'); 
    } else {
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();
}

$errors = array();
$username = $email = $password = $c_password =""; 
if (isset($_POST['register'])) {
    $errors = validateUser($_POST);
    $username = $_POST['username'];
    if (count($errors) == 0) {
        unset($_POST['register'], $_POST['c_password']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);        
        $user_id = create('users', $_POST);
        $user = selectOne('users', ['id' => $user_id]);                
        // log user in 
        loginUser($user);
    }
    else { 
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
    }
}

//login form
if (isset($_POST['login'])) {
    $errors = validateLogin($_POST);

    if (count($errors) == 0) {
        $user = selectOne('users', ['username' => $_POST['username']]);
        if ($user && password_verify($_POST['password'], $user['password']) ) {            
            //log user in
            loginUser($user);
        }        
        else {
            array_push($errors, "Username/Password is wrong!");
        }    
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

}
