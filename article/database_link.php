<?php 
	function executeSQL($sql){
		$result = @mysql_query($sql);
		if (!$result) {
			echo "执行SQL语句错误<br/>";
			echo "错误编号:".mysql_errno()."<br/>";
			echo "错误信息:".mysql_error()."<br/>";
			exit;
		}
		return $result;
	}
	function linkToDatabase($databaseName){
		$server_ip = "127.0.0.1";
		$root_name = "root";
		$root_password = "root";

		//连接数据库认证
		$link = @mysql_connect($server_ip,$root_name,$root_password);
		if (!$link) {
			echo "连接失败<br/>";
			echo "错误编号:".mysql_errno()."<br/>";
			echo "错误信息:".mysql_error()."<br/>";
		}
		executeSQL("use $databaseName");
		executeSQL('set names utf8');
	}
	//连接数据库 dianchuang
	linkToDatabase('dianchuang');
?>