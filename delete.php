<?php

require 'identity.php';

$bucket = 'muzhi-1252597952';
$Key = 

$result = $cosClient->deleteObject(array(
//bucket 的命名规则为{name}-{appid} ，此处填写的存储桶名称必须为此格式
'Bucket' => $bucket,
'Key' => $Key));

?>