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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <title>Log in</title>
</head>
<body class="d-flex align-items-center  justify-content-center  bg-light  flex-column vh-100">
<?php if (isset($_SESSION['message'])): ?>
				<div class="alert alert-green bg-danger alert-dismissible fade show w-50 text-center ">
				<strong>Error!</strong>
					<?php 
						echo $_SESSION['message']; 
						unset($_SESSION['message']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>
    <h3 class="text-secondary ">Log in to start your session !</h3>

    <div class=" bg-light  border shadow-lg p-5 rounded vw-25 ">
        <form action="login.php" method="POST" id="login" onsubmit="return validateLoginInput(this)">
            <div class="form-group " id="email-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Please enter an Email Adress" name="email" class="w-100 rounded border " >
                    <ul class="list-unstyled" id="email-login-error">

                    </ul>
            </div>
            <div class="form-group w-100" id="password-group">
                <label for="password">Password </label>
                <input type="password" placeholder="Please enter a password" name="password" id="password" class="w-100 rounded border ">
                        <ul class="list-unstyled" id="password-login-error">

                         </ul>
            </div>
            <div class="d-flex justify-content-center mt-2 flex-wrap ">
            <input type="submit" name="login"  value="Log In" class="btn btn-primary px-3 py-1 font-weight-bold w-100 mb-2 ">
            <p class="">create account at : <a href="signup.php">REGISTER</a></p>
            </div>
        </form>
   </div>
   <script src="assets/js/script.js"></script>
</body>
</html>