<!--Connect file --->

<?php
include('../includes/connect.php');
include('../functions/common_function.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

      <!--Font awesome link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--  Css File -->
    <link rel="stylesheet" href="../style.css">

    <style>
        .admin_image{
    width: 100px;
    object-fit: contain; 
}

.footer{
    position:absolute;
    botteom:0;
}

body{
  overflow-x: hidden;
}

.product_image{
  width:100px;
  obeject-fit:contain;

}
    </style>
</head>
<body>
    
<!--Navbar --->

<div class="container-fluid P-0">

<!--First Child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="../image/logo.jpg" class="logo" alt="">
    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a href="" class="nav-link">Welcome guest</a>
        </li>
        </ul>
     </nav>
  </div>
    </nav>


<!--Second Child -->
<div class="bg-light">
<h3 class="text-center p-2">Manage Details</h3>
</div>


<!--Third Child -->
<div class="row">
    <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
  <div class="p-3">
    <a href="#"><img src="../image/pineapple.jpg" alt="" class="admin_image"></a>
    <p class="text-light text-center">Admin Name</p>
  </div>

  <div class="button text-center">
    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert products</a></button>
    <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View products</a></button>
    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert categories</a></button>
    <button><a href="index.php?view_categories" class="nav-link text-light bg-info my-1">View categories</a></button>
    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert brands</a></button>
    <button><a href="index.php?view_brands" class="nav-link text-light bg-info my-1">View brands</a></button>
    <button><a href="index.php?list_orders" class="nav-link text-light bg-info my-1">All orders</a></button>
    <button><a href="index.php?list_payments" class="nav-link text-light bg-info my-1">All payments</a></button>
    <button><a href="index.php?list_users" class="nav-link text-light bg-info my-1">List users</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
  </div>
    </div>
</div>

<!--Fourth Child -->
<div class="container my-3">
    <?php
if(isset($_GET['insert_category']))
include('insert_categories.php');

if(isset($_GET['insert_brand']))
include('insert_brands.php');

if(isset($_GET['view_products']))
include('view_products.php');

if(isset($_GET['edit_products']))
include('edit_products.php');

if(isset($_GET['delete_product']))
include('delete_product.php');

if(isset($_GET['view_categories']))
include('view_categories.php');

if(isset($_GET['view_brands']))
include('view_brands.php');

if(isset($_GET['edit_category']))
include('edit_category.php');

if(isset($_GET['edit_brands']))
include('edit_brands.php');

if(isset($_GET['delete_category']))
include('delete_category.php');

if(isset($_GET['delete_brands']))
include('delete_brands.php');

if(isset($_GET['list_orders']))
include('list_orders.php');

if(isset($_GET['list_payments']))
include('list_payments.php');

if(isset($_GET['list_users']))
include('list_users.php');
?>




</div>

<?php   include('../includes/footer.php');     ?>
</div>

    <!--Bootstrap JS Link -->
>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>