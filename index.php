<?php
include("path.php");
include(ROOT . "/app/database/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <!-- links -->
    <?php include(ROOT . "/app/includes/styles.php"); ?>

</head>
<body>

<!-- header -->
<?php   include(ROOT . "/app/includes/header.php"); ?>
<!-- end of the Header -->

<!-- meesages -->
    <?php include(ROOT . "/app/includes/messages.php"); ?>
<!-- end of the messages -->

<!-- closure or slide show  page wrapper -->
<div class="page-wrapper">
    <!-- post slider -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Post</h1>
            <i class="fas fa-chevron-left prev"></i>

            <!-- select all the posts from the database -->
            <div class="post-wrapper">
                <div class="post">
                    <img src="<?php echo URL . "/images/img_1.jpg" ?>" alt="Post Image" class="slider-image">
                    <div class="post-info">
                        <h4><a href="sigle.php?id="><?php  ?></a></h4>
                        <i class="far fa-user"><?php  ?></i>  &nbsp;
                        <i class="far fa-calender"> <?php   ?> </i> <!-- post details -->
                    </div>
                </div>
                   
                    <i class="fas fa-chevron-right next"></i>

                </div>
        </div>
     <!-- end post slider -->

     <!-- content -->
        <div class="content clearfix">

        <!-- main content -->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>

                <div class="post clearfix">
                    <img src="images/img-2.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">The Strongest and swetest song yet remain to be song</a></h3>
                        <i class="far fa-user">Belal </i>
                        &nbsp;
                        <i class="far fa-calender">May 11, 2020 </i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Repellat non iste harum quos officiis tempore,    
                        </p>
                        <a href="sigle.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                
                <div class="post clearfix">
                    <img src="images/img-6.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">The Strongest and swetest song yet remain to be song</a></h3>
                        <i class="far fa-user">Belal </i>
                        &nbsp;
                        <i class="far fa-calender">May 11, 2020 </i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Repellat non iste harum quos officiis tempore,    
                        </p>
                        <a href="sigle.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                
                <div class="post clearfix">
                    <img src="images/img-5.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">The Strongest and swetest song yet remain to be song</a></h3>
                        <i class="far fa-user">Belal </i>
                        &nbsp;
                        <i class="far fa-calender">May 11, 2020 </i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Repellat non iste harum quos officiis tempore,    
                        </p>
                        <a href="sigle.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                
                <div class="post clearfix">
                    <img src="images/img-3.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">The Strongest and swetest song yet remain to be song</a></h3>
                        <i class="far fa-user">Belal </i>
                        &nbsp;
                        <i class="far fa-calender">May 11, 2020 </i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Repellat non iste harum quos officiis tempore,    
                        </p>
                        <a href="sigle.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                
                
                <div class="post clearfix">
                    <img src="images/img_1.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">The Strongest and swetest song yet remain to be song</a></h3>
                        <i class="far fa-user">Belal </i>
                        &nbsp;
                        <i class="far fa-calender">May 11, 2020 </i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Repellat non iste harum quos officiis tempore,    
                        </p>
                        <a href="sigle.html" class="btn read-more">Read More</a>
                    </div>
                </div>

            </div>
<!--  end of the main content -->

<!-- sid4bar -->
            <div class="sidebar">

                <div class="section search">
                    <div class="section-title">
                        <form action="index.html" method="POST">
                            &nbsp; <span class="search-input">Search </span> <input type="text" name="search-item" id="" class="text-input" placeholder="Search ...">
                        </form>
                    </div>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li><a href="#">Poems</a></li>
                        <li><a href="#">Quotes</a></li>
                        <li><a href="#">Fixtion</a></li>
                        <li><a href="#">Biography</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Life Lessons</a></li>
                    </ul>
                </div>

            </div>
<!-- end of the side bar -->

        </div>
     <!-- end of the content -->
</div>
<!-- end of the closure page wrapper -->


<!-- footer -->
<?php include(ROOT . "/app/includes/footer.php") ?>
<!-- end of the Footer -->

<!-- scripts -->
<?php include(ROOT . "/app/includes/scripts.php") ?>

</body>
</html>