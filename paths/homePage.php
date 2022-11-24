

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
   <!-- JavaScript Bundle with Popper -->
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
  <link rel="stylesheet" href="assets/css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>



    <title>Home Page</title>
</head>
<body>
  <?php 
  include('../scripts.php');
  include('header.php') ;
  $data = getStatistics();
  if(!isset($_SESSION['name'])) header('Location:login.php')
  ?>

<div class="container mt-5 ">
 
            <div class="row justify-content-center border rounded shadow ">
              <h3 class="border-bottom pb-1 mb-5 bg-light">State Of Stock</h3>
                <div class="col-xl-3 col-sm-4 mb-5">
                    <div class="card shadow">
                        <div class="p-3 pt-2">
                            
                            <div class="text-end pt-1">
                                <p class="mb-0 fw-light border-bottom ">Number of Categories</p>
                                <h4 class="mb-0"><?= $data[1] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-4 mb-5">
                    <div class="card shadow">
                        <div class="p-3 pt-2">
                            
                            <div class="text-end pt-1">
                                <p class="mb-0 fw-light border-bottom ">Number of Products</p>
                                <h4 class="mb-0"><?= $data[0] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-4 mb-5">
                    <div class="card shadow">
                        <div class="p-3 pt-2">
                            
                            <div class="text-end pt-1">
                                <p class="mb-0 fw-light border-bottom ">Total quantity of available products</p>
                                <h4 class="mb-0"><?= $data[2]?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
</body>
</html>