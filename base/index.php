<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php 
	$array = array('ding','ya','hao');
	$array1 = array('ding'=> 'boos',
					'ya'=>'boos2',
					'hao'=>'boos3'
					);
	foreach ($array1 as $name=>$boos) {
		// echo "$name is $boos \n";
	}
	/**
	* Person
	*/
	class Person
	{
		public $name = '';
		public $age = '';
		public $sex = '';
		function setInfo($name,$age,$sex)
		{
			$this->name = $name;
			$this->age = $age;
			$this->sex = $sex;
			return $this;
		}
	}
	// $pipi = new Person;
	// $ding = $pipi->setInfo('PiPi','.2','femal');
	// // echo "{$ding->name}";

	// $white = '白色';
	// $black = '黑色';
	// echo "white: $white\n  black:$black\n <br/>";

	// $black = &$white;
	// echo "引用后\n";
	// echo "white: $white\n  black:$black\n <br/>";

	// $white = '红的';
	// echo "修改white后\n";
	// echo "white: $white\n  black:$black\n <br/>";

	// unset($white);
	// echo "销毁white后\n";
	// echo "white: $white\n  black:$black\n <br/>";
	$a = 3;
	function foo(){
		// global $a;
		$a += 2;
 	}
	foo();
	// echo "函数外 $a";
$str = <<< a
	wdfwsd
	sadjksd
	asdfds
a;
	// echo $str;
function output($output = 'Hello!'){
	return $output;
}
// echo output('sb');
$array2 = array('ding','ya','hao');
$array3 = array('ya','hao','is','best!');
// print_r($array2);
// print_r($array3);
// print_r(array_merge($array2,$array3));
?>
<form action="object.php" method="POST" target="_blank">
	输入一段话:<input type="text" name="string"><br/>
	长-----度:<input type="text" name="number"><br/>
	<input type="submit" value="切割">
</form>
</body>
</html>