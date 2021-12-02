<?php
include("../../path.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Manage Topics</title>


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
 <?php  include(ROOT."/admin/partials/includes/header.php")?>
 <!-- end of the navigation bar -->


<!-- Admin oanel  page wrapper -->
<div class="admin-wrapper">

    <!-- left sidebar -->
    <?php  include(ROOT."/admin/partials/includes/sidebar.php")?>
    <!-- end of the left sidebar -->

    <!-- main content -->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.html " class="btn btn-big">Create Topic</a>
            <a href="index.html" class="btn btn-big">Manage Topics</a>
        </div>

        <div class="content">
            <h2 class="page-title">Manage Topics</h2>

            <table>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Poetry</td>                        
                        <td><a href="" class="edit">  edit</a></td>
                        <td><a href="" class="delete"> delete</a></td>                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Life Lessons</td>
                        <td><a href="" class="edit">  edit</a></td>
                        <td><a href="" class="delete"> delete</a></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <!-- end of the main content -->

</div>
<!-- end of the  page wrapper -->




<!-- jquery -->
<script src="js/jquery/jquery.min.js"></script>

<!-- js codes -->
<script src="../../js/script.js"></script>


</body>
</html>