<?php  
//action.php
include "../config/config.php";

if(filter_input(INPUT_POST, 'action')=="delete"){

    $id = filter_input(INPUT_POST, 'sl');
  
    $del="DELETE FROM `product` WHERE sl=$id";
    $delete = mysqli_query($conn,$del);
   

}

?>
