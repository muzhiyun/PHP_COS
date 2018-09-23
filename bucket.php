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

 */
 
 
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
	echo ($result['Buckets'][$x]['Name']);
	getBucketLocation($result['Buckets'][$x]['Name']);
	$fp = fopen("$DOCUMENT_ROOT/tencent-cos-php/bucket.txt",'a');
    fwrite($fp,$result['Buckets'][$x]['Name']);
	fwrite($fp,"\r\n");
    fclose($fp);
	echo "<br/>";
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
	echo ($result['Contents'][$x]['Key']);
	echo "<br/>";
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