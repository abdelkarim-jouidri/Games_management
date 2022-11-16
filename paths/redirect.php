<?php
    include('../DB/connection.php');
    $query = "SELECT username,password FROM admins";
    $result = mysqli_query($connexion,$query);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
   
    foreach($data as $row) {
        print_r($row);
    }

    session_start();
    if($_POST['password']== $row['password']) {
        $_SESSION['name'] = $row['username'];
        header('Location: homePage.php');
    }
    // var_dump($_SERVER['name']);
    
    


?>