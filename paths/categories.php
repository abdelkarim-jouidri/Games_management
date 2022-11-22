<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- CSS only -->




    <title>categories</title>
</head>
<body >
    <?php 
      include('../scripts.php');
      include('header.php') ;
      $data = getCategories();
      // print_r($data)

    ?>

<div class="container ">

<div class="table-responsive">
  <table class="table  shadow rounded border table-hover">
  <div class="d-flex justify-content-between align-items-center mb-1 h-25">
  <h6>ALL categories</h6>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal" onclick='handleCategoryModal()'>
              <i class="bi bi-plus-circle-fill pb-1 mr-2"></i>
      Add category
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
        
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $row) :
            // print_r($row)
            $image=$row['image'];
            $id=$row['cat_ID'];
            $name = $row['category_name'];
            $description = $row['category_description'];
            // var_dump($data);
           echo "<tr data-bs-toggle='modal' data-bs-target='#categoryModal' onclick='fillCategoryModal($id)'>
              <th scope='row' ><img src='../resources/$image' height='40' width='40' ></th>
              <td id='category-name-$id'>$name</td>
              <td id='category-description-$id'>$description</td>
            </tr>";
           
            ?>
            
      <?php endforeach ?>
    </tbody>
  </table>
</div>
</div>


      <!-- MODAL -->
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoryModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="../scripts.php" method="POST" id="categoryModalForm">
                        <!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="category-id" name="category_id">
							<div class="mb-3">
								<label class="name-label ">Product's Name</label>
								<input type="text" class="form-control "  id="category-name" name="category_name" value="" />
							</div>
							
							
							<div class="mb-3">
								<label class="date-label">PHOTO</label>
								<input type="file" class="form-control" id="category-photo" name="category_photo"/>
							</div>
							<div class="mb-0">
								<label class="description-label">Description</label>
								<textarea class="form-control" rows="10" id="category-description" name="category_description"></textarea>
							</div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                                <button type="submit" name="delete_category" class="btn btn-danger task-action-btn " id="category-delete-btn" >Delete</a>
                                <button type="submit" name="update_category" class="btn btn-warning task-action-btn " id="category-update-btn">Update</a>
                                <button type="submit" name="save_category" class="btn btn-primary task-action-btn" id="category-save-btn">Save</button>
                            </div>
                    </form>
      </div>
      
  </div>
</div>
<!--end category modal-->
<script src="assets/js/script.js"></script>
</body>
</html>