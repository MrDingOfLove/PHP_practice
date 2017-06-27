<?php 
	include_once "database_link.php";
	//删除 id 列表
	$delete_id_sql = "alter table article_copy drop id";
	executeSQL($delete_id_sql);
	//重新添加 id 列 设为主键 自增长
	$add_id_sql= "Alter table article_copy add COLUMN id INT NOT NULL AUTO_INCREMENT PRIMARY KEY first";
	executeSQL($add_id_sql);

	
	$sql = "select id,title,time from article_copy";
	$result =  executeSQL($sql);
	//解析结果
 	$articles = array();
 	while ($row = mysql_fetch_assoc($result)) {
 		$articles[] = $row;
 	}
?>