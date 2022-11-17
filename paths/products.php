

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>




    <title>Document</title>
</head>
<body>
  <?php include('header.php') ?>

  <div class="container">

  <table class="table table-striped border">
    <div class="d-flex justify-content-between align-items-center mb-1 h-25">
    <h6>ALL PRODUCTS</h6>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productsModal">
                <i class="bi bi-plus-circle-fill pb-1 mr-2"></i>
        Add product
    </button>

    </div>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">description</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
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

                    <form action="../scripts.php" method="POST">
                        <!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="product-id" name="task_id">
							<div class="mb-3">
								<label class="name-label ">Product's Name</label>
								<input type="text" class="form-control "  id="product-name" name="product_name" value="" />
							</div>
							
							<div class="mb-3">
								<label class="category-label">Category</label>
								<select class="form-select" id="product-category" name="product_category">
									<option value="">Please select a category</option>
									<option value="1">Category 1</option>
									<option value="2">Category 2</option>
									<option value="3">Category 3</option>
									<option value="4">Category 4</option>
								</select>
							</div>
							
							<div class="mb-3">
								<label class="date-label">Date</label>
								<input type="date" class="form-control" id="product-date" name="product_date"/>
							</div>
							<div class="mb-0">
								<label class="description-label">Description</label>
								<textarea class="form-control" rows="10" id="product-description" name="product_description"></textarea>
							</div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                                <button type="submit" name="delete" class="btn btn-danger task-action-btn" id="task-delete-btn" >Delete</a>
                                <button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</a>
                                <button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
                            </div>
                    </form>
      </div>
      
  </div>
</div>
</body>
</html>

