<?php
	
 date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)

require_once('../config/config.php');


  $name = filter_input(INPUT_POST, 'name');
  $platf = filter_input(INPUT_POST, 'platf');

  $category =filter_input(INPUT_POST, 'category'); 
    $validity = filter_input(INPUT_POST, 'validity');
  $price = filter_input(INPUT_POST, 'price');
  $currency =filter_input(INPUT_POST, 'currency');
  $productblog =filter_input(INPUT_POST, 'productblog');
  $productvideo = filter_input(INPUT_POST, 'productvideo');
  $productmql = filter_input(INPUT_POST, 'productmql');
  $description =filter_input(INPUT_POST, 'description'); 
  $descriptioninput =filter_input(INPUT_POST, 'descriptioninput'); 
  $tags = filter_input(INPUT_POST, 'tags');
  // $discount = $_POST["discount"];
  $image =filter_input(INPUT_POST, 'image'); 
  $iguide =filter_input(INPUT_POST, 'iguide'); 
  $userguide =filter_input(INPUT_POST, 'userguide'); 
  $productfile = filter_input(INPUT_POST, 'productfile');
 


  $sql = "INSERT INTO `product`(`category`, `name`,`validity`, `cost`,`currency`, `image`, `userguide`, `description`, `input_description`, `tags`, `Platform`, `productfile`, `link_blog`, `link_video`, `link_mql5`, `installation_guide`) VALUES ('".$category."','".$name."','".$validity."','".$price."','".$currency."','".$image."','".$userguide."','".$description."','".$descriptioninput."','".$tags."','".$platf."','".$productfile."','".$productblog."','".$productvideo."','".$productmql."','".$iguide."') ";
  $result=$conn->query($sql);

  echo $sql;
?>
