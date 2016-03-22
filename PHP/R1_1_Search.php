<?php
	@header("Content-Type:text/html; charset=utf8");
	require_once("function/global_function.php");

	$word = $_POST["text1"];
	if($word ==""){
		echo "<script>";
		echo "alert('搜尋名稱，請勿空白！')";
		echo "</script>";

		echo "<script>";

		echo "document.location.href='R1_1.php';";

		echo "</script>";
	}
	else{
		

	}
	echo "<form action='R1_1_Search.php' method='post' name='formAdd' id='formAdd'>";
	echo "關鍵字搜尋 "."<input type = 'text' name ='text1' id = 'text1' >"." "."<input type = 'submit' name = 'but1' id = 'but1' value = '搜尋'>";
	echo "</form>";

	echo "<hr size = '5' color = '#0000ff'>";//分隔線

	echo "<h2>搜尋結果</h2>";
	$data = sqlQry("SELECT * FROM view WHERE A_Name LIKE '%$word%'",array($word));

	foreach ($data as $key ) {
		echo "<table width='510'height = '155' border = '0' cellspacing='0' >";
		echo "<th width='200' rowspan='4' bgcolor= '#a3cf62'>"."<align = 'left'>"."<img src= ".$key['Picture']. " height='150' width='200'".">"."</align>"."</font>"."</th>";
		echo "<tr>";
		echo "<th width='100' height = '60' bgcolor= '#a3cf62' >".'名稱'."</th>"."<td  height = '50' bgcolor= '#a3cf62'>".$key['A_Name']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<th width='100' height = '50' bgcolor= '#b7ba6b'>".'電話'."</th>"."<td bgcolor= '#b7ba6b'>".$key['A_Tel']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<th width='100' height = '50' bgcolor= '#b7ba6b'>".'地址'."</th>"."<td bgcolor= '#b7ba6b'>".$key['A_Add']."</td>";
		echo "</tr>";



		echo "</table>";

		echo "<p>";
		echo "<p>";
	}

echo "<hr size = '5' color = '#0000ff'>";


$data2 = sqlQry("SELECT * FROM view ",array());

	foreach ($data2 as $key ) {
		echo "<table width='510'height = '155' border = '0' cellspacing='0' >";
		echo "<th width='200' rowspan='4' bgcolor= '#a3cf62'>"."<align = 'left'>"."<img src= ".$key['Picture']. " height='150' width='200'".">"."</align>"."</font>"."</th>";
		echo "<tr>";
		echo "<th width='100' height = '60' bgcolor= '#a3cf62' >".'名稱'."</th>"."<td  height = '50' bgcolor= '#a3cf62'>".$key['A_Name']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<th width='100' height = '50' bgcolor= '#b7ba6b'>".'電話'."</th>"."<td bgcolor= '#b7ba6b'>".$key['A_Tel']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<th width='100' height = '50' bgcolor= '#b7ba6b'>".'地址'."</th>"."<td bgcolor= '#b7ba6b'>".$key['A_Add']."</td>";
		echo "</tr>";



		echo "</table>";

		echo "<p>";
		echo "<p>";
	}
?>