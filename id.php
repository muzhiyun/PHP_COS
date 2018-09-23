<?php
require 'vendor/autoload.php';

$cosClient = new Qcloud\Cos\Client(array(
	'region' => 'ap-beijing-1',
    'credentials' => array(
        'secretId' => '自己填',
        'secretKey' => '自己填',
		'appId'=>'自己填',
    ),
));



?>