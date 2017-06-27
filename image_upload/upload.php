<?php  
	// 配置文件需要上传到服务器的路径，需要允许所有用户有可写权限，否则无法上传成功
	$uploadPath = '../uploads_images/';
	$imag_show_Path = 'uploads_images/';
	// 获取提交的图片数据
	$file = $_FILES['file'];
	//获取图片回调路径
	$callbackUrl = $_POST['callbackUrl'];
	;
	if($file['error'] > 0){
	    $msg = '传入参数错误' . $file['error'] . "  ";
	    exit($msg);
	}else{
		//判断文件是否存在
		if(file_exists($uploadPath.$file['name'])){
       		$msg = $file['name'] . "文件已经存在！";
       		exit($msg);
    	}else{
    		if (is_uploaded_file($file['tmp_name'])) {
    			// echo "上传成功";
    		}
    		//将文件从缓存区 移动到 自己指定的目录
    		// echo $uploadPath.$file['name'];
    		if(move_uploaded_file($file['tmp_name'], $uploadPath.$file['name'])){
	         	$img_url = "http://php.com/".$imag_show_Path.$file['name'];
	          	$url = $callbackUrl."?img_url={$img_url}";
	          	// echo "$url";
	          	// 跳转
	          	header("location:$url");
	          	exit();
	        }else{
	          exit("上传失败！");

	        }
    	}
	}
?>