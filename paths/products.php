

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>





    <title>products</title>
</head>
<body>
  <?php 
  include('../scripts.php');
  include('header.php');
  $product_data = getProducts();
  $category_data = getCategories();

  ?>

  <div class="container">
  <div class="table-responsive">
  <table class="table  border shadow table-hover">
    <div class="d-flex justify-content-between align-items-center mb-1 h-25">
    <h6>ALL PRODUCTS</h6>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productsModal" onclick="handleProductModal()">
        Add product
    </button>

    </div>
    <?php if (isset($_SESSION['message'])): ?>
				<div class="alert alert-green bg-success alert-dismissible fade show  text-center">
				<strong>Success!</strong>
					<?php 
						echo $_SESSION['message']; 
						unset($_SESSION['message']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>
    <thead>
      <tr>
        <th scope="col">photo</th>
        <th scope="col">name</th>
        <th scope="col">description</th>
        <th scope="col">quantity</th>
        <th scope="col">category</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($product_data as $row) :
            $image=$row['product_image'];
            $category = $row['category_name']; 
            $name = $row['product_name'];
            $description = $row['product_description'];
            $quantity = $row['quantity'];
            $cat_ID = $row['cat_ID'];
            
            $id = $row['product_ID'];
           echo "<tr data-bs-toggle='modal' data-bs-target='#productsModal' onclick='fillProductModal($id)' >
              <th scope='row'><img src='../resources/$image' height='60' width='60' class='rounded-circle'></th>
              <td id='product-name-$id'>$name</td>
              <td id='product-description-$id'>$description</td>
              <td id='product-quantity-$id'>$quantity</td>
              <td id='product-category-$id' data-category='$cat_ID'>$category</td>
            </tr>";
           
            ?>
            
      <?php endforeach ?>
    </tbody>
  </table>
  </div>
  
  </div>
    <!-- MODAL -->
    <div class="modal fade" id="productsModal" tabindex="-1" aria-labelledby="productsModalLabel" aria-hidden="true">
     <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productsModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

                    <form action="../scripts.php" method="POST" id="productsModalForm">
                        <!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="product-id" name="product_id">
							<div class="mb-3">
								<label class="name-label ">Product's Name</label>
								<input type="text" class="form-control "  id="product-name" name="product_name" value="" />
							</div>
							
                            <div class="mb-3">
                            <label class="category-label">Category</label>
								<select class="form-select" id="product-category" name="product_category">
									<option value="">Please select a category</option>
                                        <?php foreach($category_data as $row) : 
                                            echo "<option value='{$row['cat_ID']}'>{$row['category_name']}</option>"?>
                                            <?php endforeach?>
                                 </select>
							</div> 
                            <div class="mb-3">
								<label class="date-label">PHOTO</label>
								<input type="file" class="form-control" id="product-photo" name="product_photo"/>
							</div>
							<div class="mb-3">
								<label class="date-label">Quantity</label>
								<input type="number" class="form-control" id="product-quantity" name="product_quantity" min="1" max="1000"/>
							</div>
							<div class="mb-0">
								<label class="description-label">Description</label>
								<textarea class="form-control" rows="10" id="product-description" name="product_description"></textarea>
							</div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                                <button type="submit" name="delete_product" class="btn btn-danger task-action-btn" id="product-delete-btn" >Delete</a>
                                <button type="submit" name="update_product" class="btn btn-warning task-action-btn" id="product-update-btn">Update</a>
                                <button type="submit" name="save_product" class="btn btn-primary task-action-btn" id="product-save-btn">Save</button>
                            </div>
                    </form>
      </div>
      
  </div>
</div>
    
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>   
    
    <!-- <script src="script.js"></script> -->

</body>
</html>

