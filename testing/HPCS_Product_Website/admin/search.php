<!-- 
<?php
// include "../config/config.php";
//     $q=$_REQUEST["q"]; 
//     $sql="SELECT `tag_name` FROM `tag` WHERE `tag_name` LIKE '%$q%'";
//     $result = mysql_query($sql);
//     $json=array();

//     while($row = mysql_fetch_array($result)) {
//       array_push($json, $row['tag_name']);
//     }

//     echo json_encode($json);
?> -->

<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT tag_name FROM tag WHERE tag_name like '" . $_POST["keyword"] . "%' ORDER BY tag_name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="tag-list">
<?php
foreach($result as $tag) {
?>
<li onClick="selectTags('<?php echo $tag["tag_name"]; ?>');"><?php echo $tag["tag_name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>


