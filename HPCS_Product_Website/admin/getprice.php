<?php  
//action.php
include "../config/config.php";

if((filter_input(INPUT_POST, 'data1'))){
  // echo filter_input(INPUT_POST, 'data1');

   $id = filter_input(INPUT_POST, 'data1');
    $sql="SELECT `price` FROM `validity_price` WHERE validity='$id'";

      $result=mysqli_query($conn,$sql);
     
        if( mysqli_num_rows($result)==1){
            $row=mysqli_fetch_assoc($result);
           
               $tg=$row["price"];
              print_r($tg);
        }
          else{
            print_r("false");
        }
   
}
?>
