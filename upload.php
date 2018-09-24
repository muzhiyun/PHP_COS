<?php
require 'identity.php';

// 若初始化 Client 时未填写 appId，则 bucket 的命名规则为{name}-{appid} ，此处填写的存储桶名称必须为此格式
$bucket = 'muzhi-1252597952';
$file= $_FILES["file"];
$key = $file["name"];
if ($key=='')
{
	echo "操作非法，没有选择文件";
	exit;
}
$key = $file["name"];
$local_path = $file["tmp_name"];

// $key = 'file/00.jar';
// $local_path = "C:/Users/MuZhi/Desktop/00.jar";

//echo ($file["name"]);
//echo "<br/>";
//echo ($file["type"]);
//echo "<br/>";
//echo ($file["size"]);
//echo "<br/>";
//echo ($file["tmp_name"]);
//echo "<br/>";
//echo ($file["error"]);
//echo "<br/>";
//echo ($key);
//echo "<br/>";
//echo ($local_path);

## putObject(上传接口，最大支持上传5G文件)
### 上传文件流
try {
    $result = $cosClient->putObject(array(
        'Bucket' => $bucket,
        'Key' => $key,
        'Body' => fopen($local_path, 'rb')
    ));
	/* echo "<pre>";
    print_r($result);
	echo "<pre>"; */
	if (gettype($result) == 'object') 
		//echo "上传成功";
		echo "<script>alert('上传成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
	else echo "上传失败，请重试";
} catch (\Exception $e) {
    echo($e);
}

## Upload(高级上传接口，默认使用分块上传最大支持50T)
### 上传文件流
/* try {
    $result = $cosClient->Upload(
        $bucket = $bucket,
        $key = $key,
        $body = fopen($local_path, 'rb')
    );
    print_r($result);
} catch (\Exception $e) {
    echo($e);
} */ 