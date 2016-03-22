<?php
	@header("Content-Type:text/html; charset=utf8");
	require_once("function/global_function.php");
	echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>";
	echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>";

	echo "<form action='R1_1_Search.php' method='post' name='formAdd' id='formAdd'>";
	echo "關鍵字搜尋 "."<input type = 'text' name ='text1' id = 'text1' >"." "."<input type = 'submit' name = 'but1' id = 'but1' value = '搜尋'>";
	
	echo"	<div class='input-group'>
	  <input judy_type(array)pe='text' class='form-control' aria-label='...'>
	  <div class='input-group-btn'>
	    <!-- Button and dropdown menu -->
	  </div>
	</div>";


	echo "</form>";
	echo '<p>'; 
	$data = sqlQry("SELECT * FROM view ",array());

	foreach ($data as $key ) {
		echo "<table width='510'height = '155' border = '0' cellspacing='0' >";
		echo "<th width='200' rowspan='4' bgcolor= '#a3cf62'>"."<align = 'left'>"."<img src= ".$key['Picture']. " height='150' width='200'".">"."</align>"."</font>"."</th>";
		echo "<tr>";
		echo "<th width='100' height = '60' bgcolor= '#a3cf62' >".'名稱'."</th>"."<td  height = '50' bgcolor= '#a3cf62'>"."<a href = 'Contents.php?id=".$key['A_ID']."'>".$key['A_Name']."</a>"."</td>";
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