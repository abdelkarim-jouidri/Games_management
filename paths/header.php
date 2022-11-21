<?php
  session_start();
?>

<header class="d-flex flex-column align-items-between ">
<h1 class="text-center  mb-2" href="#"><i class='fas fa-gamepad'></i> Games Management</h1>
  <nav class="navbar navbar-expand  navbar-light bg-light shadow mb-5 px-2 border-top d-flex flex-sm-nowrap flex-wrap justify-content-between">
    <!-- <span class="navbar-brand" href="#"><i class='fas fa-gamepad'></i> Game Management</span> -->
    <div class="d-flex justify-content-sm-start justify-content-center w-100">
        <div class="navbar-nav d-flex vw-75 justify-content-between">
          <a class="nav-link " href="homePage.php">Home</a>
          <a class="nav-link" href="categories.php">Categories</a>
          <a class="nav-link" href="products.php">Products</a>
          <a class="nav-link" href="products.php">Dashboard</a>

        </div>
    </div>
    <div class="btn-group d-flex justify-content-center w-100">
      <a  class=" dropdown-toggle dropdown-item text-center text-sm-end" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $_SESSION['name'] ?>
      </a>
      <div class="dropdown-menu dropdown-menu-right w-75">
        <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider" href="#"></div>
          <a class="dropdown-item" href="login.php">Log out</a>
        
      </div>
    </div>
  </nav>
</header>

