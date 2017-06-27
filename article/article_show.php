<!DOCTYPE html>
<html>
<head>
	<title>文章管理</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.content{
			width: 60%;
			min-width: 880px;
			margin:  0 auto;
		}
		table{
			width: 100%;
			
		}
		.title{
			width: 70%;
		}
		.id,.time{
			text-align: center;
		}
		tr{
			height: 50px;
		}
		tr:nth-child(odd){
			background: #f8f8f8;
		}
		p{
			text-align: center;
			padding: 60px 0 0;
			font-size: 32px;
			color: #333333;
			letter-spacing: 0;
		}
		a:link,a:visited,a:active {
			color: green
		}	
		a{
			color:green;
			padding: 0 5px;
			text-decoration:none;
		}
		#add_article{
			font-size: 21px;
			display: block;
			padding: 5px 0;
		}
	</style>
</head>
<body>
	<div class="content">
		<iframe  name="post_frame" style="display:none;"> </iframe>
		<p>文章管理</p>
		<div style="text-align: right;"><a id="add_article" href="article_add.php">添加文章</a></div>
		
		<table>
			<tr>
				<td class="id">序号</td>
				<td class="title">标题</td>
				<td class="time">时间</td>
				<td class="time">操作</td>
				
			</tr>
			<?php include_once "data_get.php" ?>
			<?php foreach ($articles as $key => $value):?>
				<tr>
					<td class="id"><?php echo $value['id']; ?></td>
					<td class="title"><?php echo $value['title']; ?></td>
					<td class="time"><?php echo $value['time']; ?></td>
					<td><a href="article_add.php?id=<?php echo $value['id']; ?>">编辑</a><a id="delete_article" href="article_delete.php?id=<?php echo $value['id']; ?>" target="post_frame" onclick = "reload()">删除</a></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</body>
<script type="text/javascript">
	function reload(){
		location.reload(true);
		alert("文章已经删除");
	}
</script>
</html>