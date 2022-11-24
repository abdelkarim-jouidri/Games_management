<?php

session_start();

    if(isset($_POST['delete_category'])) deleteCategory();

    if(isset($_POST['save_product'])) addProduct();

    if(isset($_POST['register'])) addAdmin();

    if(isset($_POST['login'])) verifyLogIn();

    if(isset($_POST['save_category'])) addCategory();

    if(isset($_POST['delete_product'])) deleteProduct();

    if(isset($_POST['update_category'])) editCategory();

    if(isset($_POST['update_product'])) editproduct();



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
        // if the image input is not filled with a new image 
        if(empty($_POST['category_photo'])){
            $query = "UPDATE `category` SET `category_name`='$name' ,`category_description`='$description' WHERE `category`.`cat_ID` = '$id'";
            if(mysqli_query($connexion,$query)) {
                $_SESSION['message'] = "the item has been successfully updated";
                header('location:paths/categories.php');
            }
        }

        // otherwise get the new submitted path have it override the old path 

        else {
            $query = "UPDATE `category` SET `category_name`='$name' ,`category_description`='$description' , `image`='$image' WHERE `category`.`cat_ID` = '$id'";
            if(mysqli_query($connexion,$query)) {
                $_SESSION['message'] = "the item has been successfully updated";
                header('location:paths/categories.php');
            }
        }
    }
    
    function deleteProduct(){
        include('DB/connection.php');
        $id = $_POST['product_id'];

        $query = "DELETE FROM products WHERE `product_id` = '$id'";
       if(mysqli_query($connexion,$query)){
                $_SESSION['message'] = "the item has been successfully deleted";
                header('location:paths/categories.php');
       }
        
    }
    function editproduct(){
        include('DB/connection.php');
        $id = $_POST['product_id'];
        $name = $_POST['product_name'];
        $description = $_POST['product_description'];
        $image = $_POST['product_photo'];
        $quantity = $_POST['product_quantity'];
        $category = $_POST['product_category'];

        // if the image input is not filled with a new image 
        if(empty($_POST['product_photo'])){
            $query = "UPDATE `products` SET `product_name`='$name' ,`product_description`='$description', `quantity`='$quantity', `category_id`='$category'
                      WHERE `products`.`product_ID` = '$id'";
            if(mysqli_query($connexion,$query)) {
                $_SESSION['message'] = "the item has been successfully updated";
                header('location:paths/products.php');
            }
        }

        // otherwise get the new submitted path have it override the old path 

        else {
            $query = "UPDATE `products` SET `product_name`='$name' ,`product_description`='$description', 
                                            `quantity`='$quantity', `category_id`='$category' , `product_image`='$image' 
                      WHERE `products`.`product_ID` = '$id'";
            if(mysqli_query($connexion,$query)) {
                $_SESSION['message'] = "the item has been successfully updated";
                header('location:paths/products.php');
            }
        }
    }

    function getStatistics(){
        include('DB/connection.php');
        $query_products = "SELECT count(*) as products_count FROM products";
        $query_categories = "SELECT count(*) as category_count FROM category";
        $query_sum = "SELECT SUM(quantity) as sum_of_quantity FROM products";
        $res_products = mysqli_query($connexion,$query_products);
        $res_categories = mysqli_query($connexion,$query_categories);
        $res_sum_of_quantity = mysqli_query($connexion,$query_sum);
        $data = [];
        // $data  mysqli_fetch_assoc($res_products)['products_count'];
        array_push($data,mysqli_fetch_assoc($res_products)['products_count']);
        array_push($data,mysqli_fetch_assoc($res_categories)['category_count']);
        array_push($data,mysqli_fetch_assoc($res_sum_of_quantity)['sum_of_quantity']);


        return $data;


    }
    


?>