<?php 
	include_once "database_link.php";
	$id = $_GET['id'];
	$sql = "delete from article_copy where id = $id";
	executeSQL($sql);
?>