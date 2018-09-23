<!DOCTYPE html>
<html lang="zh">
 
	<head>
<style>  
  
#login_click{ margin-top:32px; height:40px;}  
#login_click a   
{  
      
  
    text-decoration:none;  
    background:#2f435e;  
    color:#f2f2f2;  
      
    padding: 10px 30px 10px 30px;  
    font-size:16px;  
    font-family: 微软雅黑,宋体,Arial,Helvetica,Verdana,sans-serif;  
    font-weight:bold;  
    border-radius:3px;  
      
    -webkit-transition:all linear 0.30s;  
    -moz-transition:all linear 0.30s;  
    transition:all linear 0.30s;  
      
    }  
   #login_click a:hover { background:#385f9e; }  
  
</style>  
<style class="darkreader darkreader--user-agent" media="screen">

html {
    background-color: #000000 !important;
}
html, body, input, textarea, select, button {
    background-color: #000000;
}
html, body, input, textarea, select, button {
    border-color: #434343;
    color: #ffffff;
}
a {
    color: #0d59ff;
}
table {
    border-color: #323232;
}
::placeholder {
    color: #e8d1b0;
}
::selection {
    background-color: #004af2;
    color: #ffffff;
}
::-moz-selection {
    background-color: #004af2;
    color: #ffffff;
}
input:-webkit-autofill,
textarea:-webkit-autofill,
select:-webkit-autofill {
    background-color: #3e4900 !important;
    color: #ffffff !important;
}
::-webkit-scrollbar {
    background-color: #000000;
    color: #f5e5c8;
}
::-webkit-scrollbar-thumb {
    background-color: #00000d;
}
::-webkit-scrollbar-thumb:hover {
    background-color: #020a1c;
}
::-webkit-scrollbar-thumb:active {
    background-color: #111d2f;
}
::-webkit-scrollbar-corner {
    background-color: #000000;
	
}</style>
 
		<meta charset="UTF-8">
		<title>轻存储</title>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js"></script>
	</head>
	<body>
	<b>轻存储0.1d</b>
	<br\><br\>
	<?php
	require 'bucket.php';
	?>	
	<button class="btn btn-primary" id="btlogin">下载</button>	
	<p></p>
		<form action="upload.php" enctype="multipart/form-data" method="post">
			<input type="file" name="file" class="input">
			<button class="btn btn-primary" type="submit">上传</button>
		</form>
		
		
	</body>
 
</html>