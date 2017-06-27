<?php 
	$article_id = $_GET['id'];
	include_once "database_link.php";
	$sql = "select * from article_copy where id = $article_id";
	$result = executeSQL($sql);
	//解析结果
 	$article = mysql_fetch_assoc($result);

 	$article_content = trim($article['detial']);
 	$article_contents = explode('</p><p>', $article_content);
 	$article_ps = array();
 	foreach ($article_contents as $article_p) {
 		$article_p = str_replace(array('<p>','</p>'), '', $article_p);
 		$article_ps[] = $article_p;
 	}
?>