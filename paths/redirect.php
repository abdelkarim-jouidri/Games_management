<?php
    include('../DB/connection.php');
    
    $query = "SELECT admin_password, username FROM admins";
    $result = mysqli_query($connexion,$query);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

   
    foreach($data as $row) {
        print_r($row);
    };
    // echo "<br> POST : ";
    // var_dump($_POST['password']);
    // var_dump(password_verify($_POST['password'],$row['admin_password']))
    session_start();
    if(password_verify($_POST['password'],$row['admin_password'])) {
        $_SESSION['name'] = $row['username'];
        header('Location: homePage.php');
    }else {
        $_SESSION['message'] = "wrong login";

    }
    // var_dump($_SERVER['name']);
    
    


?>