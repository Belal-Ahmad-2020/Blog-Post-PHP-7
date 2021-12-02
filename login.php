<?php 
include('path.php');
//include(ROOT ."/app/database/connect.php");
include(ROOT . "/app/validation/users.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <!-- links -->
    <?php include(ROOT . "/app/includes/styles.php"); ?>

</head>
<body>

 <!--navigation bar  -->
 <?php   include(ROOT . "/app/includes/header.php") ?>
<!-- end navaigation bar -->

<div class="auth-content">
    <form action="login.php" method="post" autocomplete="on">
        <h2 class="form-title">Access Your Account</h2>

        <?php include(ROOT . "/app/includes/formError.php"); ?>            

        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="text-input"
            placeholder="Username" value="<?php echo $username; ?>" autofocus>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="text-input"
            placeholder="Password" value="<?php echo $password ?>">
        </div>

        <button type="submit" name="login" class="btn btn-big">Login </button>
        <p>Doesn;t have an account yet? <a href="<?php  echo URL . '/register.php' ?>" class="title">Sign Up</a></p>
    </form>

</div>


</body>
</html>