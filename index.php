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
        <li class="tab"><a class="active" href="index.php">上传</a></li>
        <li class="tab"><a href="bucket.php">下载</a></li>
        <li class="tab"><a href="tuku.php">图库</a></li>
        <!----<li class="tab"><a href="#test4">Test 4</a></li>----->
      </ul>
    </div>
  </nav>
  
  <br/><br/>
  
  <h5 class="center-align">
	<?php
	
	 #echo "<blockquote>";
  
  function curl_file_get_contents($durl){  
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $durl);  
	curl_setopt($ch, CURLOPT_TIMEOUT,2); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回    
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回    
    $data = curl_exec($ch);  
    curl_close($ch);  
    return $data;  
	}
	
  function apidata(){
	$durl='http://yiju.ml/api/word.php?m=json' ;
	#echo ("$durl");
	$apidata=curl_file_get_contents($durl);
	#echo ("$apidata");
	$jsonde=(json_decode($apidata,true));	
	if (($jsonde['content'])!='')
		echo ($jsonde['content']);
	else
		echo ("不是我的锅，队友的api又双叒挂了");
	#echo "<pre>";
	#print_r ($apidata);
	#echo "</pre>";
	#echo "finish";
	}
   
	apidata();
	#echo "</blockquote>";
  ?>
</h5>
  
  <div class="container">
  <br><br><br/>
 <div class="page-header" id="banner">
	<div  class="z-depth-5">
    <div class="row">
    
      <div class="col-sm-12">
        <div class="well infobox" align="center">
         <br><br><br><br><br> <div id="shuo">
		
         <h1 style="color:#404040; font-size: 2rem;">选择一个文件开始上传</h1>
         </div>
		 <form action="upload.php" enctype="multipart/form-data" method="post">
          <div id="uu" style="position: relative;">
         <button id="pickfiles" class="btn btn-raised btn-primary" style="height: 50px; font-size: 20px; z-index: 1;"><i class="fa fa-plus" aria-hidden="true"></i> 选择文件<div class="ripple-container"></div>
		  <br><br> <br></button>
         <div id="juxing" class="moxie-shim moxie-shim-html5" style="position: absolute;top: -0%;left: 42%;width: 16%; height: 50px; overflow: hidden; z-index: 0;"><input id="inputblock" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,image/png,image/gif,audio/mpeg,video/x-flv,.rar,application/zip,.bin,.apk,.py,application/octet-stream,video/mp4,.trx,.tgr,.conf,text/html,.ini,.sql,.open">
		 </form>
		
		 </div>
		 </div>
		 
		 <p>
	</p>
          
    <br><br><br><br>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
	<!---<?php
	###require 'bucket.php';
	?>
	---->
	
	
	
	<!----
	<form action="upload.php" enctype="multipart/form-data" method="post">
		<input type="file" name="file" class="input">
		<button class="btn btn-primary" type="submit">上传</button>
	</form>
	<button class="btn btn-primary" id="btlogin">下载</button>
	----->
	
	<div></br></div>
	<br/><br/><br/><br/><br/><br/>
	<br/><br/>
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