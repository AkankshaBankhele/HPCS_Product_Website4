<?php
  date_default_timezone_set("Asia/Calcutta");   

require_once('../config/config.php');
  $tag_name = filter_input(INPUT_POST, 'tag_name');
 
  $sql = "SELECT * FROM `tag` WHERE tag_name='$tag_name'";
  $result=mysqli_query($conn,$sql);
        if( mysqli_num_rows($result)==1){
            $row=mysqli_fetch_assoc($result);
            
            if($row["tag_name"]==filter_input(INPUT_POST, 'tag_name') )
            {
               $tg=$row["tag_name"];
               print_r($tg);
            }
           
        }
         else
            {
               print_r("2");
            }
             
?>
