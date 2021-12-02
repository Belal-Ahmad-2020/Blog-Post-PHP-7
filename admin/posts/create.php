<?php
include("../../path.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Add Post</title>

    <?php include(ROOT . "/admin/partials/includes/styles.php") ?>
</head>
<body>

 <!--navigation bar  -->
 <?php  include(ROOT."/admin/partials/includes/header.php")?>
 <!-- end of the navigation -->

<!-- Admin oanel  page wrapper -->
<div class="admin-wrapper">

    <!-- left sidebar -->
    <?php include(ROOT."/admin/partials/includes/sidebar.php");  ?>
    <!-- end of the left sidebar -->

    <!-- main content -->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.php " class="btn btn-big">Create Post</a>
            <a href="index.php" class="btn btn-big">Manage Posts</a>
        </div>

        <div class="content">
            <h2 class="page-title">Manage Posts</h2>

            <form action="create.php" method="post">
                <div>
                    <label for="">Title</label>
                    <input type="text" name="title" id="title" class="text-input">
                    <!--    32:04  ck editor -->
                </div>
                <div>
                    <label for="">Body</label><br>  
                    <textarea name="body" id="body" rows="8" cols="90"></textarea>
                </div>
                <div>
                    <label for="">Image</label>
                    <input type="file" name="image" id="image" class="text-input">
                </div>
                <div>
                    <label for="">Topics</label>
                    <select name="topic" id="topic" class="text-input">
                        <option value="Poetry">Poetry</option>
                        <option value="Life Lessons">Life Lessons</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-big">Add Post</button>
                </div>
            </form>

        </div>
    </div>
    <!-- end of the main content -->

</div>
<!-- end of the  page wrapper -->





<!-- jquery -->
<!-- ckeditor -->
<!-- 32:04 --> <script src=""></script>
<!-- js codes -->

<?php include(ROOT . "/admin/partials/includes/scripts.php"); ?>

</body>
</html>