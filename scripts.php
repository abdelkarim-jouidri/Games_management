<?php

session_start();

    if(isset($_POST['delete_category'])) deleteCategory();

    if(isset($_POST['save_product'])) addProduct();

    if(isset($_POST['register'])) addAdmin();

    if(isset($_POST['login'])) verifyLogIn();

    if(isset($_POST['save_category'])) addCategory();

    function addProduct(){
        include('DB/connection.php');
        $name = $_POST['product_name'];
        $description = $_POST['product_description'];
        $date = $_POST['product_date'];
        $category = $_POST['product_category'];
        $photo = $_POST['product_photo'];
        $quantity = $_POST['product_quantity'];

        $query = "INSERT INTO `products` (`product_ID`,`product_name`,`product_description`, `product_date`,`category_id`,`product_image`,`quantity`)
                     VALUES (NULL, '$name' , '$description' , '$date' , '$category', '$photo' ,'$quantity') ";
        if(mysqli_query($connexion,$query)) {
            $_SESSION['message'] = "the item has been successfully added";
            header('location:paths/products.php');
        }
    }

    function getProducts(){
        include('DB/connection.php');
        $query = "SELECT product_name , category_name , product_image , product_description, product_ID, quantity , cat_ID FROM products
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
        if(mysqli_query($connexion,$query)) {
            $_SESSION['message'] = "the item has been successfully added";
            header('location:paths/categories.php');
        }

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
        $query = "SELECT admin_password, username FROM admins WHERE `email`='$email_input' LIMIT 1";
        $result = mysqli_query($connexion,$query);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        if(count($data)>0){
            foreach($data as $row) {
                    var_dump($data);
                    echo "<br>";
                    var_dump($row);
                    if(password_verify($_POST['password'],$row['admin_password'])) {
                        $_SESSION['name'] = $row['username'];
                        header('location:homepage.php');
                    }else {
                        $_SESSION['message'] = "wrong login";
                        
                    }
                }
                
        }
        else {
            $_SESSION['message'] = "No such email exists in the database";

        }

    }

    function deleteCategory(){
        include('DB/connection.php');
        $id = $_POST['category_id'];

        $query_product = "DELETE FROM products WHERE `category_id` = '$id'";
        $query_category = "DELETE FROM category WHERE `cat_ID` = '$id'";
       if( mysqli_query($connexion,$query_product)){
            if(mysqli_query($connexion,$query_category)) {
                $_SESSION['message'] = "the item has been successfully deleted";
                header('location:paths/categories.php');
            }
        }
        
    }

    function editCategory(){
        include('DB/connection.php');
        $id = $_POST['category_id'];
        $name = $_POST['category_name'];
        $description = $_POST['category_description'];
        $image = $_POST['category_photo'];
        $query = "UPDATE `category` SET `category_name` = 'warA' WHERE `category`.`cat_ID` = '$id';";
        // echo "entered the function";
        if(empty($_POST['category_photo'])){
            $query = "UPDATE `category` SET `category_name`='$name' ,`category_description`='$description' WHERE `category`.`cat_ID` = '$id'";
            if(mysqli_query($connexion,$query)) {
                $_SESSION['message'] = "the item has been successfully updated";
                header('location:paths/categories.php');
            }
        }else {
            $query = "UPDATE `category` SET `category_name`='$name' ,`category_description`='$description' , `image`='$image' WHERE `category`.`cat_ID` = '$id'";
            if(mysqli_query($connexion,$query)) {
                $_SESSION['message'] = "the item has been successfully updated";
                header('location:paths/categories.php');
            }
        }
    }
    function deleteCategory(){
        include('DB/connection.php');
        $id = $_POST['category_id'];

        $query_product = "DELETE FROM products WHERE `category_id` = '$id'";
        $query_category = "DELETE FROM category WHERE `cat_ID` = '$id'";
       if( mysqli_query($connexion,$query_product)){
            if(mysqli_query($connexion,$query_category)) {
                $_SESSION['message'] = "the item has been successfully deleted";
                header('location:paths/categories.php');
            }
        }
        
    }

    if(isset($_POST['update_category'])) editCategory();


?>