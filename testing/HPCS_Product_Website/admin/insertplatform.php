<?php
	
 date_default_timezone_set("Asia/Calcutta");   

require_once('../config/config.php');


  $plt_name = $_POST["plt_name"];

 
  $sql = "INSERT INTO `platform`( `plt_name`) VALUES ('".$plt_name."') ";
  $result=$conn->query($sql);


  $sl = "";

  $sqlQuery = "SELECT `plt_id` FROM platform ";
  $resultSet = mysqli_query($conn, $sqlQuery) ;
  while( $row = mysqli_fetch_assoc($resultSet) ) {
    $sl = $row["plt_id"];
  }

  echo $sl;
  
?>