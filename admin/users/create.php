<?php
include("../../path.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Add User</title>


<!-- font awesome -->
<link rel="stylesheet" href="../../fonts/css/fontawesome.css">
<link rel="stylesheet" href="../../fonts/css/all.css">

<!-- fonts    candal  lora google fonts -->
<!-- <link  href="fonts/Candal-Regular.ttf">
<link  href="fonts/Lora-Italic-VariableFont_wght.ttf"> -->
<!-- style -->
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../css/style.css">

</head>
<body>

 <!--navigation bar  -->
<header>
    <div class="logo">
        <h1 class="logo-text">
            <span>KU</span> Developers
        </h1>
    </div>
<!-- end navaigation bar -->

    <!-- menu icon -->
        <i class="fa fa-bars  menu-toggle"></i>
    <!-- end menu icon -->

    <!-- menu navbar -->
    <ul class="nav">
        <li>
            <a href="#">
                <i class="fa fa-user"></i>
                    &nbsp; Belal Ahamd
                <i class="fa fa-chevron-down fa-sm"></i>
            </a>
            <ul class="drop-down">
            
                <li><a href="#" class="logout">Logout</a></li>
            </ul>
        </li>
    </ul>
    <!-- menu navbar -->

</header>

<!-- Admin oanel  page wrapper -->
<div class="admin-wrapper">

    <!-- left sidebar -->
    <div class="left-sidebar">
        <ul>
            <li><a href="../posts/index.html.html">Manage Posts</a></li>
            <li><a href="index.html">Manage Users</a></li>
            <li><a href="../topics/index.html">Manage Topics</a></li>
        </ul>
    </div>
    <!-- end of the left sidebar -->

    <!-- main content -->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.html " class="btn btn-big">Add User</a>
            <a href="index.html" class="btn btn-big">Manage Users</a>
        </div>

        <div class="content">
            <h2 class="page-title">Add User</h2>

            <form action="create.html" method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="text-input"
                    placeholder="Username" autofocus>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="text-input"
                    placeholder="Emal Address">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="text-input"
                    placeholder="Password">
                </div>
                <div>
                    <label for="c_password">Re-enter Password</label>
                    <input type="password" name="c_password" id="c_password" class="text-input"
                    placeholder="Re-enter Password">
                </div>
                <div>
                    <label for="">Role</label>
                    <select name="role" id="role" class="text-input">
                        <option value="Admin">Admin</option>
                        <option value="Author">Author</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-big">Add User</button>
                </div>
            </form>

        </div>
    </div>
    <!-- end of the main content -->

</div>
<!-- end of the  page wrapper -->




<!-- jquery -->
<script src="js/jquery/jquery.min.js"></script>

<!-- ckeditor -->
<!-- 32:04 --> <script src=""></script>
<!-- js codes -->
<script src="../../js/script.js"></script>


</body>
</html>