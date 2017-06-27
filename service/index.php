<!DOCTYPE html>
<html>
<head>
	<title>Service</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method ="GET">
	选择你的爱好<br/>
	<select name="hobbys">
		<option value="篮球">篮球</option>
		<option value="足球">足球</option>
		<option value="乒乓球">乒乓球</option>
		<option value="羽毛球">羽毛球</option>
		<option value="橄榄球">橄榄球</option>
	</select>
	<input type="submit" name="s" value="展示我的爱好">
</form>
<?php 
	if (array_key_exists('s', $_GET)) {
		// $description = join('',$_GET['hobbys']);
		$description = $_GET['hobbys'];
		echo "你的爱好有: $description";
	}
?>
</body>
</html>