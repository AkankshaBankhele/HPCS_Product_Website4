<?php  
//action.php
include "../config/config.php";

if($_POST['action']=="delete"){

    $id = $_POST['sl'];
  
    $del="DELETE FROM `product` WHERE sl=$id";
    $delete = mysqli_query($conn,$del);
   

}

?>