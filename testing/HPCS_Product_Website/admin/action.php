<?php  
//action.php
include "../config/config.php";

if($_POST['action']=="delete"){

    $id = $_POST['plt_id'];
    $del="DELETE FROM `platform` WHERE plt_id=$id";
    $delete = mysqli_query($conn,$del);

}elseif($_POST['action']=="update"){

    $id = $_POST['plt_id'];
    $plt_name = $_POST['plt_name'];
    $upt="UPDATE `platform` SET `plt_name`='".$plt_name."' WHERE plt_id=$id";
    $update = mysqli_query($conn,$upt);

}

?>