<?php
require 'identity.php';

// 若初始化 Client 时未填写 appId，则 bucket 的命名规则为{name}-{appid} ，此处填写的存储桶名称必须为此格式
$bucket = 'muzhi-1252597952';
$key = 'file/00.jar';
$local_path = "C:/Users/MuZhi/Desktop/00.jar";

### 下载到本地
try {
    $result = $cosClient->getObject(array(
        'Bucket' => $bucket,
        'Key' => $key,
        'SaveAs' => $local_path
    ));
} catch (\Exception $e) {
    echo($e);
}
?>