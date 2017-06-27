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
	//查看所有数据库
	echo "查看所有数据库<br>";
	$sql = "show databases";
	$result = executeSQL($sql);
	
	//遍历所有内容
	// $databases = array();
	// while ($row = mysql_fetch_row($result)){
	// 	$databases[] = $row;
	// 	print_r($row);
	// 	echo "<br/>";
	// }
	// echo "end";
	echo "使用数据库db1<br/>";
	$select_database_sql = "use db1";
	executeSQL($select_database_sql);

	echo "插入数据<br/>";
	$insert_sql = "insert into usr values(null,'Amao',2)";
	executeSQL($insert_sql);

	//获取自增长ID
	echo "获取自增长ID<br/>";
	$id = mysql_insert_id();
	echo $id ? $id:mysql_affected_rows();
	echo '<br/>';

	$close = mysql_close($link);
	if (!$close) {
		echo "断开失败<br/>";
		echo "错误编号:".mysql_errno()."<br/>";
		echo "错误信息:".mysql_error()."<br/>";
	}else{
		echo "数据库断开成功<br/>";
	}









	
?>