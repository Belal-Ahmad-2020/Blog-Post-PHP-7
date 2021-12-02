<header>
    <a href="<?php echo URL . '/index.php' ?>" class="logo">
      <h1 class="logo-text"><span>Awa</span>Inspires</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="<?php echo URL . '/index.php' ?>">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>


    <?php  if(isset($_SESSION['id'])): ?>      
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <span style="font-size: 1.5em;"> <?php echo $_SESSION['username'] ?> </span> 
            <i class="fa fa-chevron-down" style="font-size: .9em;"></i>
          </a>
          <ul>
      <?php if(isset($_SESSION['admin'])): ?> 
            <li><a href="<?php echo URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
      <?php endif;  ?>
            <li><a href="<?php echo URL . '/logout.php' ?>" class="logout">Logout</a></li>
          </ul>
        </li>
    <?php  else: ?>  
      <li><a href="<?php echo URL . '/register.php' ?>">Sign Up</a></li>
      <li><a href="<?php echo URL . '/login.php' ?>">Login</a></li>
      
    <?php endif; ?>
    </ul>
</header>