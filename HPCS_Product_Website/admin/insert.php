<?php
	
 date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)

require_once('../config/config.php');

  $name = filter_input(INPUT_POST, 'name');
  $platf = $_POST["platf"];
  $category = $_POST["category"];
    $validity = $_POST["validity"];
  $price = $_POST["price"];
  $currency = $_POST["currency"];
  $productblog = $_POST["productblog"];
  $productvideo = $_POST["productvideo"];
  $productmql = $_POST["productmql"];
  $description = $_POST["description"];
  $descriptioninput = $_POST["descriptioninput"];
  $tags = $_POST["tags"];
  // $discount = $_POST["discount"];
  $image = $_POST["image"];
  $iguide = $_POST["iguide"];
  $userguide = $_POST["userguide"];
  $productfile = $_POST["productfile"];
 

  $sql = "INSERT INTO `product`(`category`, `name`,`validity`, `cost`,`currency`, `image`, `userguide`, `description`, `input_description`, `tags`, `Platform`, `productfile`, `link_blog`, `link_video`, `link_mql5`, `installation_guide`) VALUES ('".$category."','".$name."','".$validity."','".$price."','".$currency."','".$image."','".$userguide."','".$description."','".$descriptioninput."','".$tags."','".$platf."','".$productfile."','".$productblog."','".$productvideo."','".$productmql."','".$iguide."') ";
  $result=$conn->query($sql);

  echo $sql;
?>
