<?php 
	$server_ip = "127.0.0.1";
	$root_name = "root";
	$root_password = "root";
	//连接数据库认证
	$link = @mysql_connect($server_ip,$root_name,$root_password);
	if (!$link) {
		echo "连接失败<br/>";
		echo "错误编号:".mysql_errno()."<br/>";
		echo "错误信息:".mysql_error()."<br/>";
	}else{
		echo "数据库连接成功<br/>";
	}

	function executeSQL($sql){
		$result = @mysql_query($sql);
		if (!$result) {
			echo "执行SQL语句错误<br/>";
			echo "错误编号:".mysql_errno()."<br/>";
			echo "错误信息:".mysql_error()."<br/>";
			exit;
		}else{
			echo "执行SQL语句成功<br/><br/>";
		}
		return $result;
	}

	//设置字符集
	echo "设置字符集<br>";
	$sql = "set names utf8";
	$result = executeSQL($sql);

	echo "使用数据库db1<br/>";
	$select_database_sql = "use db1";
	executeSQL($select_database_sql);

	echo "查询数据<br/>";
	$select_sql = "select * from usr";
	$res = executeSQL($select_sql);

	//解析结果
 	$usrs = array();
 	while ($row = mysql_fetch_assoc($res)) {
 		$usr[] = $row;
 	}
 	include_once "display.html";

?>