<?php

$sname="localhost";
$uname="root";
$password="";
$db_name="admin";

$conn=mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn){
    echo "Connection failed";
}
// $uname="uneoxy5khw7ib";
// $password="3Il[%5eJ41b3";
// $db_name="dbgrzkzugjtwei";
?>