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
	<?php include_once 'article_load.php' ?>
	<p>标题</p>
	<input type="text"id="title" placeholder="文章标题" value="<?php echo $article['title']; ?>">
	<p>时间</p>
	<input type="text"id="time" placeholder="文章发布时间" value="<?php echo $article['time']; ?>">
	<p>内容</p>
	<div id="article">
		<?php foreach ($article_ps as $article_p):?>
			<textarea placeholder="输入文章第一段"><?php echo $article_p;?></textarea>
		<?php endforeach ?>
	</div>
	<input type="button" value="增加段落" onclick="add()">
	<input type="button" value="删除最后一段" onclick="delete_p()">
	<br/>
	<input type="button" value="上传" onclick="upload()">

	<div id="article_detial">
	
	</div>
</body>
<script type="text/javascript">
	function add(){
		var textarea = document.createElement("textarea");
		var div_article = document.getElementById('article');
		div_article.appendChild(textarea);
	}
	function delete_p(){
		var result = confirm("确定要删除最后一段吗？");
		if (result) {
			var article = document.getElementById('article');
			var article_lastChild = article.lastChild;
			article.removeChild(article_lastChild);
		}
	}
	function upload(){
		var article_detial = document.getElementById('article_detial');
		article_detial.innerHTML = "";
		
		var textareas = document.getElementsByTagName('textarea');
		for (var i = 0; i < textareas.length; i++) {
			var p = document.createElement("p");
			var p_text = document.createTextNode(textareas[i].value);
			p.appendChild(p_text);
			article_detial.appendChild(p);
		}
	}
</script>
</html>