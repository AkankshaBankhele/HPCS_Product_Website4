<?php  
//action.php
include "../config/config.php";

if(isset($_POST['data1'])){
    //fire query using this id and get the name of employee and echo it
   $id = $_POST['data1'];
    $sql="SELECT `cur` FROM `validity_price` WHERE validity='$id'";

      $result=mysqli_query($conn,$sql);
     
        if( mysqli_num_rows($result)==1){
            $row=mysqli_fetch_assoc($result);
           
               $tg=$row["cur"];
               echo $tg;
        }
          else{
            echo "false";
        }
   
}
?>
