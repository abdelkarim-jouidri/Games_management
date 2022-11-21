<?php

    session_start();

    if(isset($_POST['save_cat'])) addCategory();

    function addProduct(){
        include('DB/connection.php');
        $name = $_POST['product_name'];
        $description = $_POST['product_description'];
        $date = $_POST['product_date'];
        $category = $_POST['product_category'];
        $query = "INSERT INTO `products` (`product_ID`,`product_name`,`product_description`, `product_date`,`category_id`)
                     VALUES (NULL, '$name' , '$description' , '$date' , '$category') ";
        if(mysqli_query($connexion,$query)) echo "successful insertion";
    }

    function getProducts(){
        include('DB/connection.php');
        $query = "SELECT product_name , category_name FROM products
                  INNER JOIN category ON products.category_id = category.cat_ID ";
        $res = mysqli_query($connexion , $query);
        $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
        return $data;
    }

    function getCategories(){
        include('DB/connection.php');
        $query = "SELECT * FROM category";
        $res = mysqli_query($connexion,$query);
        $data = mysqli_fetch_all($res , MYSQLI_ASSOC);
        return $data;
    }
    
    function addCategory(){
        include('DB/connection.php');
        $name = $_POST['category_name'];
        $description = $_POST['category_description'];
        $photo = $_POST['category_photo'];
        $query = "INSERT INTO `category` (`cat_ID`,`category_name`,`category_description`, `image`)
                     VALUES (NULL, '$name' , '$description' , '$photo') ";
        if(mysqli_query($connexion,$query)) echo "successful insertion";

    }

    function addAdmin(){
        include('DB/connection.php');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email =  $_POST['email'];
        
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $query = "INSERT INTO admins (id,username,email,admin_password) VALUES (NULL , '$username','$email','$hash') ";
        if(mysqli_query($connexion,$query)) $_SESSION['message'] = "you have been successfully added to the database";
    }

    function verifyLogIn(){
        include('../DB/connection.php');
        $email_input = $_POST['email'];
        $query = "SELECT admin_password FROM admins WHERE `email`='$email_input'";
        $result = mysqli_query($connexion,$query);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
        if(count($data)>0){
            foreach($data as $row) {
                    print_r($row);
                };
               
                if(password_verify($_POST['password'],$data[0]['admin_password'])) {
                    $_SESSION['name'] = $row['username'];
                }else {
                    $_SESSION['message'] = "wrong login";
            
                }
        }else {
            $_SESSION['message'] = "wrong login";
    
        }

    }

   if(isset($_POST['save'])) addProduct();

   if(isset($_POST['register'])) addAdmin();

   if(isset($_POST['login'])) verifyLogIn();


?>