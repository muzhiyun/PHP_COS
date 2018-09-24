<?php

require 'identity.php';

$bucket = 'muzhi-1252597952';
$bucket1 = 'muzhi';
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
/* 
# 获取bucket信息
## headBucket
 try {
    $result = $cosClient->headBucket(array(
        'Bucket' => $bucket
    ));
    print_r($result);
} catch (\Exception $e) {
    echo($e);
}
 */

# 列出bucket下所有object
/* try {
    $result = $cosClient->listObjects(array(
        'Bucket' => $bucket
    ));
    foreach ($result['Contents'] as $rt) {
        print_r($rt);
    }
} catch (\Exception $e) {
    echo($e);

}

####暂时弃用
 
 
 # 获取bucket地域
## 
function getBucketLocation($tempbucket)
{
	require 'identity.php';
	try {
		//echo "<br/>";
		//echo ($tempbucket);
		$tempresult = $cosClient->getBucketLocation(array(
			'Bucket' => $tempbucket
		));
		echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
		print_r($tempresult['Location'] );

	} catch (\Exception $e) {
		echo($e);
	};
}

 
# 列出所有bucket并打印
$result = $cosClient->listBuckets();
$len = count($result['Buckets']);
file_put_contents("$DOCUMENT_ROOT/tencent-cos-php/bucket.txt",'');
echo "<br/><br/><b>bucket列表&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;位置</b><br/><br/>";
for ($x=0;$x<$len;$x++)
{
	echo "<b class=\"striped\">";
	echo ($result['Buckets'][$x]['Name']);
	getBucketLocation($result['Buckets'][$x]['Name']);
	$fp = fopen("$DOCUMENT_ROOT/tencent-cos-php/bucket.txt",'a');
    fwrite($fp,$result['Buckets'][$x]['Name']);
	fwrite($fp,"\r\n");
    fclose($fp);
	echo "</b><br/>";
	//echo $DOCUMENT_ROOT;
}

/* 
echo ($result['Buckets'][0]['Name']);
echo "<br/><br/><br/>"; 

 */
 
# 列出bucket下所有object并打印
$result = $cosClient->listObjects(array('Bucket' => $bucket));
$len = count($result['Contents']);
echo "<br/><br/><b>文件列表</b><br/><br/>";
for ($x=0;$x<$len;$x++)
{
	$forblank = strlen($result['Contents'][$x]['Key']);                                             //##求出文件名长度 多退少补 使后续链接对齐
	echo ($result['Contents'][$x]['Key']);
	//echo ($forblank);
	for($y=20-$forblank;$y>0;$y--)
	{
		echo "&nbsp;&nbsp;";                                                                       //##生成空格 对齐
	}
	echo "<a href='http://file.muzhidianzi.cn/".$result['Contents'][$x]['Key']."' download=\"test\" class=\"waves-effect waves-light btn-small\">下载</a>";                                                                     	//##CDN自定义域名
	echo "<br/><hr>";
	
	

	//echo "<a href="http://muzhi-1252597952.cos.ap-beijing-1.myqcloud.com/">下载</a>";           //##普通域名
	
}





/* 
try {
		$tempresult = $cosClient->getBucketLocation(array(
			'Bucket' => 'guangzhou-1252597952'
		));
		print_r($tempresult);

	} catch (\Exception $e) {
		echo($e);
	};

 */


//echo $len;
/* echo "<pre>";
print_r($result);
echo "<pre>";
 */
/*  
$result1 = $cosClient->listBuckets();
echo ($result1);
echo "<br/><br/><br/><br/>";
 */
 
/*  function get_all_static($className)
{
    $r = new ReflectionClass($className);
    var_dump($r->getProperties());
}
 function showAllProperties2(){
         var_dump(get_object_vars($this));
     }
function object_to_array($obj) {
    $obj = (array)$obj;
    foreach ($obj as $k => $v) {
        if (gettype($v) == 'resource') {
            return;
        }
        if (gettype($v) == 'object' || gettype($v) == 'array') {
            $obj[$k] = (array)object_to_array($v);
        }
    }
 
    return $obj;
}
 */
 //echo "测试》》》".$result['Contents'][$x]['Key']."《《《测试结束";
//$test= object_to_array($result);
//echo ($test);
//echo ($result);
//echo "<br/><br/><br/><br/>";
//echo ($result['Contents']['0']);
//echo "<pre>";
//print_r($result['Contents']['0']);
//echo "<pre>";
//echo "<br/><br/><br/><br/>";
//echo gettype($result);
//echo "<br/><br/><br/><br/>";
//echo "<br/><br/><br/><br/>";
//get_all_static("$result");
//echo ($result->Contents);
//echo "<br/><br/><br/><br/>";
//echo ($data->Contents);
//echo "<br/><br/><br/><br/>";
//var_dump ($result);
//echo "<br/><br/><br/><br/>";
//var_dump(get_object_vars($result));
//echo "<br/><br/><br/><br/>";
//echo "<br/><br/><br/><br/>";
//echo ($rt['Key']);
//echo gettype($result['Contents']);
//echo "<pre>";
//print_r($result['Contents']);
//echo "<pre>";
//echo "<br/><br/><br/><br/>";
//echo ($result['Contents']);
?>