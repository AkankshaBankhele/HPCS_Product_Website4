<?php  
//action.php
include "../config/config.php";

if($_POST['action']=="delete"){

    $id = $_POST['tag_id'];
  
    $del="DELETE FROM `tag` WHERE tag_id=$id";
    $delete = mysqli_query($conn,$del);
   

}elseif($_POST['action']=="update"){

    $id = $_POST['tag_id'];
    $tag_name = $_POST['tag_name'];
    $upt="UPDATE `tag` SET `tag_name`='".$tag_name."' WHERE tag_id=$id";
    $update = mysqli_query($conn,$upt);

}

?>