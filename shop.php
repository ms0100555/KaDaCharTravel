<!-- 新增美食資訊 -->
<?php session_start(); 
    header("Content-Type:text/html; charset=utf-8");
    
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="logoohho.ico">    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>測試網頁</title>
<style>
#container { 
margin-top:10px; 
margin-left:10%; 
margin-right:10%; 
margin-bottom:20px; 
border: 1px solid #e3e3e3; 
}

#cen { 
margin-top:-520px; 
margin-left:30%; 
margin-right:10%; 
margin-bottom:20 px; 
border: 1px solid #e3e3e3;
height: auto px; 
border-collapse:collapse;
}

#lef{
margin-top:-0px; 
margin-left:10%; 
margin-right:70%; 
margin-bottom:20px; 
border: 1px solid #e3e3e3;
height: 500px;
border-collapse:collapse; 
}
</style>

</head>
<body>
<div id = "container">
<ul class="nav nav-pills nav-justified">
  
  <li role="presentation" ><a href="#">主畫面</a></li>
  <li role="presentation"><a href="#">管理員資訊</a></li>
  <li role="presentation" class="active"><a href="#">資料管理</a></li>
  <li role="presentation"><a href="#">行程管理</a></li>
  
</ul>
</div>
<div  id = "lef">

	<ul class="nav nav-pills nav-stacked">
  		<li role="presentation"><a href="#">景點</a></li>
      <li role="presentation"><a href="#">新增景點資訊</a></li>
  		<li role="presentation"><a href="#">美食</a></li>
      <li role="presentation"><a href="#">新增美食資訊</a></li>
  		<li role="presentation"><a href="#">旅館</a></li>
      <li role="presentation"><a href="#">新增旅館資訊</a></li>

      
	</ul>

</div >
<div  id = "cen" >

<form action="" method="post" name="formAdd" id="formAdd">
<center>
<table >
<h1 align="center">新增商店</h1><br>
商店名稱：<br> <input type="text" id="Name" name="Name"><br><br>
商店種類：<br> <input type="text" id="Kind" name="Kind"><br><br>
商店地址： <br><input type="text" id="Add" name="Add"><br><br>
Lat：<br> <input type="text" id="Lat" name="Lat"><br><br>
Lng： <br><input type="text" id="Lng" name="Lng"><br><br> 


</table>
<input type="submit" id="confirm" name="confirm" value="確認"><br><br>
<input type="hidden" name="action"        value="add">
</center>

</form>

</div >


</body>
</html>

<?php
    if(isset($_POST["action"])&&($_POST["action"]=="add")){
    @header("Content-Type:text/html; charset=utf8");
    require_once("function/global_function.php"); 

        $Kind = $_POST["Kind"];
        $Name = $_POST["Name"];
        $Add = $_POST["Add"];
        $Lat = $_POST["Lat"];
        $Lng = $_POST["Lng"];




            $IDCheck = sqlQry("SELECT * FROM shop WHERE Name=? ",array($Name));
            if (!empty($IDCheck)) {
    
                echo "<script>";

                echo "alert('已有相同商店')";

                echo "</script>";

            }

            else{

                $data = array($Kind,$Name,$Add,$Lat,$Lng);
                $data_row = sqlEdit("INSERT INTO shop (`Kind`,`Name`,`Address`,`Lat`,`Lng`) 
                	VALUES (?,?,?,?,?)",$data);
                
                echo "<script>";

                echo "alert('新增成功！')";

                echo "</script>";
            }



    }

?>