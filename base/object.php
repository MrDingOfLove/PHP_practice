<!DOCTYPE html>
<html>
<head>
	<title>Object</title>
</head>
<body>
<?php
	trait Trait_1{
		function run(){
			echo "Trait_1 runing <br/>";
		}
	}
	trait Trait_2{
		function run(){
			echo "Trait_2 runing <br/>";
		}
	}
	/**
	* 
	*/
	class Animation 
	{
		use Trait_1,Trait_2{
			Trait_2::run as run_2;
			Trait_1::run insteadof Trait_2;
		}
	}
	// $wangcai = new Animation;
	// $wangcai->run();
	// $wangcai->run_2();
	$str = $_POST['string'];
	$num = $_POST['number'];
	$length = ceil(strlen($str)/$num);
	echo "The {$num}-letter chunks of '{$str}' are :<br/>";
	for ($i=0; $i < $length; $i++) { 
		$sub_str = substr($str, $i*$num,$num);
		printf("%d:%s<br/>\n",$i+1,$sub_str);
	}
?>
</body>
</html>