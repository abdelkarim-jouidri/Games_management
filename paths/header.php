<?php
  session_start();
?>


  <nav class="navbar navbar-expand  navbar-light bg-light shadow mb-5 px-2">
    <span class="navbar-brand" href="#"><i class='fas fa-gamepad'></i> Game Management</span>
    <div class="d-flex justify-content-center gap-10 w-100">
        <div class="navbar-nav d-flex vw-75 justify-content-between">
          <a class="nav-link " href="homePage.php">Home</a>
          <a class="nav-link" href="categories.php">Categories</a>
          <a class="nav-link" href="products.php">Products</a>
        </div>
    </div>
    <div class="btn-group">
      <a  class=" dropdown-toggle dropdown-item" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $_SESSION['name'] ?>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider" href="#"></div>
          <a class="dropdown-item" href="login.php">Log out</a>
        
      </div>
    </div>
  </nav>

