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
	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">&nbsp;&nbsp;轻存储0.1.1d</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">登陆</a></li>
        <li><a href="badges.html">控制台登陆</a></li>
        <li><a href="collapsible.html">插件</a></li>
      </ul>
    </div>
  </nav>
	<?php
	require 'bucket.php';
	?>
	<p>
	</p>
	<form action="upload.php" enctype="multipart/form-data" method="post">
		<input type="file" name="file" class="input">
		<button class="btn btn-primary" type="submit">上传</button>
	</form>
    <!----
	<button class="btn btn-primary" id="btlogin">下载</button>
	----->
	<br/><br/><br/><br/><br/>
	<br/><br/><br/><br/><br/><br/>
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