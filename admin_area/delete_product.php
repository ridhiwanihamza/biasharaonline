<?php

if(isset($_GET['delete_product'])){
    $delete_id=$_GET['delete_product'];
    //echo $delete_id;
    // delete query

    $delete_product = "select * from products where product_id=$delete_id";
    $result_product = mysqli_query($con,$delete_product);
    if (mysqli_query($con, $delete_product)) {
        echo "Record deleted successfully";
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }
}


?>