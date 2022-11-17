<?php
    



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
    <title>Document</title>
</head>
<body class="d-flex align-items-center  justify-content-center  bg-secondary bg-gradient flex-column vh-100">
    <h3 class="text-white ">Log in to start your session !</h3>

    <div class=" bg-light  border shadow-lg p-4 rounded vw-25 ">
        <form action="" method="POST" id="login">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Please enter an Email Adress" name="email" class="w-100 rounded border " >
            </div>
            <div class="form-group">
                <label for="password">Password </label>
                <input type="password" placeholder="Please enter a password" name="password" id="password" class="w-100 rounded border border-dark">
            </div>
            <div class="d-flex justify-content-between">
            <input type="text" id="btn"  value="Log In" onclick="validateInput()" class="btn btn-primary px-3 py-1 font-weight-bold">
            <input type="submit" name="register" value="REGISTER" class="btn btn-primary px-3 py-1 font-weight-bold">
            </div>
        </form>
   </div>
</body>
</html>