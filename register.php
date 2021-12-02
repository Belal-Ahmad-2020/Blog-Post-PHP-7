<?php
include("path.php");
// require_once(ROOT . "/app/database/connect.php");
include(ROOT . "/app/validation/users.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- links -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <?php include(ROOT . "/app/includes/styles.php"); ?>
</head>
<body>

 <!--navigation bar  -->
 <?php   include(ROOT . "/app/includes/header.php") ?>
<!-- end navaigation bar -->

<div class="auth-content">

    <form action="register.php" method="post" autocomplete="on">
        <h2 class="form-title">Register</h2>

    <!-- <?php if (count($errors) > 0): ?>
        <div class="msg error">
        <?php foreach ($errors as $error): ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>            
        </div>    
    <?php endif; ?>     -->


    <?php include(ROOT . "/app/includes/formError.php"); ?>            

        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username"  class="text-input"
            placeholder="Username" autofocus value="<?php echo $username; ?>" > 
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="text-input"
            placeholder="Emal Address" value="<?php echo $email; ?>" >
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="text-input"
            placeholder="Password" value="<?php echo $password; ?>" >
        </div>
        <div>
            <label for="c_password">Re-enter Password</label>
            <input type="password" name="c_password" id="c_password" class="text-input"
            placeholder="Re-enter Password" value="<?php ?>" >
        </div>
        <button type="submit" name="register" class="btn btn-big"> Register </button>
        <p>Already have an account? <a href="<?php echo URL.'/login.php'  ?>" class="title">Sign In</a></p>
    </form>

</div>


<!-- scripts -->
<?php include(ROOT . "/app/includes/scripts.php") ?>

</body>
</html>