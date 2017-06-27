<?php 
	$str = '<p>现如今，Facebook已经成为跨境电商最大的流量来源之一，投放一条Facebook广告一天就能带来数千上万的访客。对销量提升有非常大的作用。不过，很多卖家发现，访客进入亚马逊等第三方平台后，购物行为就不能追踪了！不能追踪了！</p>';

	echo "<textarea>$str</textarea>";


	$str = str_replace(array('<p>','</p>'), '', $str);

	echo "<textarea>$str</textarea>";
?>