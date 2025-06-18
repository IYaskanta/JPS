<?php 
include("config.php");
if($_POST['id']!=""):
	extract($_POST);
    $id=mysqli_real_escape_string($db,$id);
	$sql = $db->query("DELETE FROM announcement WHERE id='$id'");
endif;
?>