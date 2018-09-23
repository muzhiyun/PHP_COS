<?php
require 'identity.php';

$bucket = 'muzhi-1252597952';

$key = 'index.html';
$region = 'ap-beijing-1';
$url = "/{$key}";
$request = $cosClient->get($url);
$signedUrl = $cosClient->getObjectUrl($bucket, $key, '+10 minutes');
echo ($signedUrl);

?>