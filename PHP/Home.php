<?php 
	@header("Content-Type:text/html; charset=utf8");
	require_once("function/global_function.php");



 ?>
 
 <html>
 <head>
 	<title>主畫面</title>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
 <body>
 <font color = "red" size="7"><center>KaDaChar Travel</center></font>
<table align="center" border="1">
<tr><th rowspan="6"><font size="6">功<p>能</font></th></tr>
<center>
 <tr><td><input type="submit"  value="規劃路線" onclick="location.href='R1.php'"></td></tr>
 <input type="hidden" name="action" value="login">
 <br>
 <tr><td><input type="submit"  value="歷史路線"></td></tr>
 <br>
 <tr><td><input type="submit"  value="天氣預報"></td></tr>
 <br>
 <tr><td><input type="submit"  value="推薦路線"></td></tr>
 <br>
 <tr><td><input type="submit"  value="景點資訊" onclick="location.href='A1.php'"></td></tr></center>
 </table>
 </body>
 </html>