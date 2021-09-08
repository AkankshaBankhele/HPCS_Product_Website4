<?php  
//action.php
include "../config/config.php";

if(filter_input(INPUT_POST, 'action')=="delete"){

    $id = filter_input(INPUT_POST, 'tag_id');
  
    $del="DELETE FROM `tag` WHERE tag_id=$id";
    $delete = mysqli_query($conn,$del);
   

}elseif(filter_input(INPUT_POST, 'action')=="update"){

    $id = filter_input(INPUT_POST, 'tag_id');
    $tag_name = filter_input(INPUT_POST, 'tag_name');
    $upt="UPDATE `tag` SET `tag_name`='".$tag_name."' WHERE tag_id=$id";
    $update = mysqli_query($conn,$upt);

}

?>
