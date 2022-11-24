<?php

?>

<header class="d-flex flex-column align-items-between ">
<h1 class="text-center  mb-2" href="#"><i class='fas fa-gamepad'></i> Games Management</h1>
  <nav class="navbar navbar-expand  navbar-light bg-light shadow mb-5 px-2 border-top d-flex flex-sm-nowrap flex-wrap justify-content-between ">
    <!-- <span class="navbar-brand" href="#"><i class='fas fa-gamepad'></i> Game Management</span> -->
    <div class="d-flex justify-content-sm-start justify-content-center w-100">
        <div class="navbar-nav d-flex vw-75 justify-content-between">
          <a class="nav-link fw-bold" href="homePage.php">Dashboard</a>
          <a class="nav-link fw-bold" href="categories.php">Categories</a>
          <a class="nav-link fw-bold" href="products.php">Products</a>

        </div>
    </div>
    <div class="btn-group d-flex justify-content-sm-end justify-content-center w-100">

      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo $_SESSION['name'] ?>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <!-- <li><a class="dropdown-item" href="#"></a></li> -->
            <div class="dropdown-divider" href="#"></div>
          <a class="dropdown-item" href="redirect.php">Log out</a>
      </div>
        </ul>
        </div>
    </div>
  </nav>
</header>

