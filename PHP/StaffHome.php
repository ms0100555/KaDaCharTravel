<?php 
	@header("Content-Type:text/html; charset=utf8");
	require_once("function/global_function.php");


	echo "<table>";

	echo "</table>";
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理員後台</title>
<style>
#sidebar_left { 
  color:yellow; 
}
</style>
</head>

<body>

<div id="sitebody" style="color:yellow;">
　<div id="header">header</div>
　<div id="sidebar_left">sidebar_left</div>
　<div id="sidebar_right">sidebar_right</div>
　<div id="content">content</div>
　<div id="footer">footer</div>
</div>





<table width="1075" height="675" border="1" align="center">
  <tr class="TEST">
    <th width="142" height="57" bgcolor="#a3cf62" scope="col">KaDaChar</th>
    <th width="493" bgcolor="#a3cf62" scope="col"><marquee direction="left" height="30" scrollamount="6" >歡迎使用後端系統！請謹慎使用，以免誤刪重要資料！</marquee></th>
    <th width="98" bgcolor="#a3cf62" scope="col">帳戶設定</th>
  </tr>
  <tr>
    <th height="34" bgcolor="#FFFFFF" class="test" scope="row">後端資訊</th>
    <td colspan="2" rowspan="9">&nbsp;</td>
  </tr>
  <tr>
    <th height="34" scope="row">管理員資訊</th>
  </tr>
  <tr>
    <th height="37" scope="row">管理員列表</th>
  </tr>
  <tr>
    <th scope="row">資訊修改</th>
  </tr>
  <tr>
  			<ul class="nav nav-pills nav-stacked">
  				<li role="presentation" class="active"><a href="R1_1.php">景點</a></li>
  				<li role="presentation"><a href="#">美食</a></li>
 				 <li role="presentation"><a href="#">旅館</a></li>
			</ul>
    <th height="23" scope="row"><a href="R1_1.php">景點</a></th>
  </tr>
  <tr>
    <th height="23" scope="row">美食</th>
  </tr>
  <tr>
    <th scope="row">旅館</th>
  </tr>
  <tr>
    <th scope="row">前端資訊</th>
  </tr>
  <tr>
    <th scope="row">推薦路線更改</th>
  </tr>
</table>
</body>
</html>