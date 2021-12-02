<?php
include("../../path.php");
include(ROOT . "/partials/db/connect.php");
$sql = "SELECT * FROM posts";
$result = $con->query($sql);
$posts = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Manage Posts</title>

    <?php include(ROOT . "/admin/partials/includes/styles.php") ?>

</head>
<body>

<!-- navigation  -->
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
            <a href="create.php" class="btn btn-big">Create Post</a>
            <a href="index.php" class="btn btn-big">Manage Posts</a>
        </div>

        <div class="content">
            <h2 class="page-title">Manage Posts</h2>

        <!-- messages -->
        <?php
        include(ROOT . "/partials/includes/messages.php");
        ?>


            <table>
                <thead>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th colspan="3">Action</th>
                </thead>
                <tbody>
                <?php 

                ?>
                <?php foreach ($posts as $key => $post): ?>                                        
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $post['title']; ?></td>
                        <td><?php ?>BELAL</td>
                        <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">  edit</a></td>
                        <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete"> delete</a></td>
                        <td><a href="" class="publish"> publish</a></td>
                    </tr>
                <?php endforeach; ?>    
                </tbody>
            </table>

        </div>
    </div>
    <!-- end of the main content -->

</div>
<!-- end of the  page wrapper -->



<?php include(ROOT . "/admin/partials/includes/scripts.php"); ?>

</body>
</html>