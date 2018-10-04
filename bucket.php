<!DOCTYPE html>
<html lang="zh">
 
	<head>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>轻存储</title>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script>
	</head>
	<body>
	 <!-----
	 <div class="card-panel teal lighten-2"><a href="/index.php">轻存储0.1.1d</div>
	<hr> 
	---->
	<nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">&nbsp;&nbsp;轻存储0.1.2d</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">登陆</a></li>
        <li><a href="badges.html">控制台登陆</a></li>
        <li><a href="collapsible.html">插件</a></li>
      </ul>
    </div>
	
	  <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="index.php">上传</a></li>
        <li class="tab"><a class="active" href="bucket.php">下载</a></li>
        <li class="tab"><a href="tuku.php">图库</a></li>
        <!----<li class="tab"><a href="#test4">Test 4</a></li>----->
      </ul>
    </div>
  </nav>
  
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
}



 
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

?>
</br></br></br></br></br></br></br></br></br>
<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">轻存储</h5>
                <p class="grey-text text-lighten-4">基于COS的私人云盘or图床？暂时还没想好</p>
              </div>
              <div class="col l4 offset-l2 s12">
               <h5 class="white-text">PY的香气？</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">行家啊</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">尝尝我自创的拔丝煎面</a></li>
                  <!---<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>--->
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright muzhiyun
            <a class="grey-text text-lighten-4 right" href="#!">More PY</a>
            </div>
          </div>
        </footer>
	 <script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
 
</html>

<?php
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