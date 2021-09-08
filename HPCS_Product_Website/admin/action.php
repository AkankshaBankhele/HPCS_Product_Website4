<?php  
//action.php
include "../config/config.php";

if(filter_input(INPUT_POST, 'action')=="delete"){

    $id = filter_input(INPUT_POST, 'plt_id');
    $del="DELETE FROM `platform` WHERE plt_id=$id";
    $delete = mysqli_query($conn,$del);

}elseif(filter_input(INPUT_POST, 'action')=="update"){

    $id = filter_input(INPUT_POST, 'plt_id');
    $plt_name =filter_input(INPUT_POST, 'plt_name'); 
    $upt="UPDATE `platform` SET `plt_name`='".$plt_name."' WHERE plt_id=$id";
    $update = mysqli_query($conn,$upt);

}

?>
