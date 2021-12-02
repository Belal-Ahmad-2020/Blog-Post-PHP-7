 <!--navigation bar  -->
 <header>
    <a class="logo" href="<?php echo URL . '/index.php' ?>">
        <h1 class="logo-text">
            <span>KU</span> Developers
        </h1>
    </a>
<!-- end navaigation bar -->

    <!-- menu icon -->
        <i class="fa fa-bars  menu-toggle"></i>
    <!-- end menu icon -->

    <!-- menu navbar -->
    <ul class="nav">
        <?php if(isset($_SESSION['username'])): ?>
        <li>
            <a href="#">
                <i class="fa fa-user"></i>
                    &nbsp; <?php echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down fa-sm"></i>
            </a>
            <ul class="drop-down">
            
                <li><a href="<?php echo URL . '/logout.php' ?>" class="logout">Logout</a></li>
            </ul>
        </li>
        <?php endif; ?>
    </ul>
    <!-- menu navbar -->

</header>