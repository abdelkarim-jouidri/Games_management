<?php
    include('../scripts.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
    <title>Sign up</title>
</head>
<body class="d-flex align-items-center  justify-content-center  bg-light bg-gradient flex-column vh-100">
<?php if (isset($_SESSION['message'])): ?>
				<div class="alert alert-green bg-success alert-dismissible fade show w-75 text-center">
				<strong>Success!</strong>
					<?php 
						echo $_SESSION['message']; 
						unset($_SESSION['message']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>
    <h3 class="text-secondary ">Register into the database !!</h3>

    <div class=" bg-light  border shadow-lg p-4 rounded vw-25 ">
        <form action="signup.php" method="POST" id="login" onsubmit="return validateInput()">
        <div class="form-group">
                <label for="username">username</label>
                <input type="text" id="username" placeholder="Please enter a username " name="username" class="w-100 rounded border " >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Please enter an Email Adress" name="email" class="w-100 rounded border " >
            </div>
            <div class="form-group">
                <label for="password">Password </label>
                <input type="password" placeholder="Please enter a password" name="password" id="password" class="w-100 rounded border ">
            </div>
            <div class="d-flex justify-content-center flex-wrap">
            <input type="submit" name="register" value="REGISTER" class="btn btn-primary px-3 py-1 font-weight-bold w-100 my-2">
            <p class="">Are you already registered ? login at : <a href="login.php" class="href">Login</a></p>
            </div>
        </form>
   </div>
</body>
</html>