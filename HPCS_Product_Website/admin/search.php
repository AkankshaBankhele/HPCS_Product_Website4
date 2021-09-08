
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(filter_input(INPUT_POST, 'keyword')) {
$query ="SELECT tag_name FROM tag WHERE tag_name like '" . filter_input(INPUT_POST, 'keyword') . "%' ORDER BY tag_name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="tag-list">
<?php
foreach($result as $tag) {
?>
<li onClick="selectTags('<?php print_r( $tag["tag_name"]); ?>');"><?php print_r( $tag["tag_name"]); ?></li>
<?php } ?>
</ul>
<?php } } ?>


