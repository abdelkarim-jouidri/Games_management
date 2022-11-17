<?php
    

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
    
   if(isset($_POST['save'])) addProduct();


?>