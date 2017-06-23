
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			text-align: center;
			width: 80%;
			margin: 0 auto;
		}
		input,textarea{
			width: 100%;
		}
		input{
			height: 30px;
		}
		textarea{
			height: 100px;
		}
	</style>
</head>
<body>
	<p>标题</p>
	<input type="text"id="title" placeholder="文章标题">
	<p>时间</p>
	<input type="text"id="time" placeholder="文章发布时间">
	<p>内容</p>
	<div id="article">
		<textarea placeholder="输入文章第一段"></textarea>
	</div>
	<input type="button" value="增加段落" onclick="add()">
	<br/>
	<input type="button" value="上传" onclick="upload()">

	<div id="article_detial">
	<p>现如今，Facebook已经成为跨境电商最大的流量来源之一，投放一条Facebook广告一天就能带来数千上万的访客。对销量提升有非常大的作用。不过，很多卖家发现，访客进入亚马逊等第三方平台后，购物行为就不能追踪了！不能追踪了！</p>
	<p>广告盲投，无法精准评估其回报率！也不知道哪些产品广告表现好可加大投入，哪些则要及时关闭止损，又该做什么样的优化提升。这是平台卖家从Facebook引流时面临的共同痛点。针对这一“顽疾”， 7月25日在深圳举办的“木瓜跨境帮”Facebook营销峰会上将正式披露行业第一款“救急方案”。据说这一方案终身免费，可以让平台卖家比较精准评估投放效果，并提供一个确实可靠的优化依据。不管Facebook营销的水有多深，本次峰会都将带领卖家顺利入门、升级，突破一个个雷区与壁垒，想要get到Facebook营销背后的各种秘辛和终极干货，一定要来参会哦。</p>
	<p>关于本次峰会的主办方，雨果网也了解到，“木瓜跨境帮”本身就是一款帮助跨境电商从站外引流的终身免费工具，目前主要专注Facebook广告投放、管理及优化一站式解决方案，可以做到：</p>
	<p>1.让卖家在最短时间，不花费任何精力的情况下拿到Facebook账号; 2.不用翻墙，即可进行Facebook广告投放和随时随地的监测优化，十分稳定; 3.提供符合国人操作习惯的汉化版界面，有完整的教程，新手操作也是so easy！4.高度自动化的广告创建，一次中等规模的Facebook广告投放，卖家自己筹备创建要3天时间，而通过木瓜跨境帮一个小时就完成。最后也是最为重磅的功能，“木瓜跨境帮”可实现站外访客进入跨境电商独立站后的购物行为追踪，提供详实数据和报告，尤其可在获取购物车弃置信息后，马上进行非常精准的二次投放，促进再转化。</p>
	<p>上海一家知名的女装独立平台通过木瓜跨境帮投放并管理“Facebook”广告，广告投资回报率超过300%，短短几天吸引了数万的访客，不仅提升了销量，也获取了相当数量的高质量潜在客户资源。</p>
	<p>据介绍，Facebook是全球最大的社交媒体，在127个国家占主导地位，拥有超过15亿的活跃用户，基于真实用户信息的核心定位可以精准圈定海量潜在用户，是跨境电商引流的不二之选。木瓜跨境帮通过与Facebook无缝对接，提供Facebook平台多样化、全方位的广告投放，辅佐优秀的创意和素材，将品牌信息、产品信息无缝传达给亿万目标用户，实现精准营销。目前是中国跨境电商进行Facebook广告投放、管理、优化，最高效及便利的途径，唯一的中文操作后台，并且提供100多种语言的自动翻译，为卖家在不同国家和地区的投放提供语言解决方案。</p>
	
	</div>
</body>
<script type="text/javascript">
	function add(){
		var textarea = document.createElement("textarea");
		var div_article = document.getElementById('article');
		div_article.appendChild(textarea);
	}
	function upload(){
		var textareas = document.getElementsByTagName('textarea');
		for (var i = 0; i < textareas.length; i++) {
			var p = document.createElement("p");
			var article_detial = document.getElementById('article_detial');
			var p_text = document.createTextNode(textareas[i].value);
			p.appendChild(p_text);
			article_detial.appendChild(p);
		}
	}
</script>
</html>