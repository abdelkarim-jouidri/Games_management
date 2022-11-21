<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>




    <title>categories</title>
</head>
<body>
    <?php 
      include('header.php') ;
      include('../scripts.php');
      $data = getCategories();
      // print_r($data)

    ?>
    <!-- <div class="d-flex justify-content-between align-items-center mb-1 h-25">
      <h6>ALL CATEGORIES</h6>
      <button type="button" class="btn btn-primary" id="category-btn" data-bs-toggle="modal" data-bs-target="#categoryModal">
                   <i class="bi bi-plus-circle-fill pb-1 mr-2"></i>
           Add category
       </button>
  
    </div> -->
    <div class="container ">
      <div class="row">
      <div class="d-flex justify-content-between align-items-center mb-1 h-25">
      <h6>ALL CATEGORIES</h6>
      <button type="button" class="btn btn-primary" id="category-btn" data-bs-toggle="modal" data-bs-target="#categoryModal">
           Add category
       </button>
  
    </div>
      </div>
        <div class="row">
          
          <?php foreach($data as $row) :
            // print_r($row)
            $image=$row['image'];
            $id=$row['cat_ID'];
            echo 
            "<div class='col-sm-6 mb-2' onclick=fillModal($id)>
                <div class='card'>
                    <div class='card-body text-center'>
                        <img src='../resources/$image' class='w-75 h-50' >
                        <h5 class='card-title' id='category-title-$id'>".$row['category_name']."</h5>
                        <p class='card-text'>".$row['category_description']."</p>
                        <a href='#' class='btn btn-primary'>Go somewhere</a>
                    </div>
                </div>
            </div>";
                  
            ?>
            <?php endforeach  ?>

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
            <form action="../scripts.php" method="POST">
                        <!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="product-id" name="task_id">
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
                                <button type="submit" name="delete" class="btn btn-danger task-action-btn" id="task-delete-btn" >Delete</a>
                                <button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</a>
                                <button type="submit" name="save_cat" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
                            </div>
                    </form>
      </div>
      
  </div>
</div>
<!--end category modal-->
<script src="/assets/js/script.js"></script>
</body>
</html>