<?php
	
 date_default_timezone_set("Asia/Calcutta");   

require_once('../config/config.php');


  $tag_name = filter_input(INPUT_POST, 'tag_name');

 
  $sql = "INSERT INTO `tag`( `tag_name`) VALUES ('".$tag_name."') ";
  $result=$conn->query($sql);


  $sl = "";

  $sqlQuery = "SELECT `tag_id` FROM tag ";
  $resultSet = mysqli_query($conn, $sqlQuery) ;
  while( $row = mysqli_fetch_assoc($resultSet) ) {
    $sl = $row["tag_id"];
  }

  print_r($sl);
  
?>
