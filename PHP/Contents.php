<?php
	@header("Content-Type:text/html; charset=utf8");
	require_once("function/global_function.php");

	$ID = $_GET["id"];

	$data = sqlQry("SELECT * FROM view WHERE A_ID = ?",array($ID));



	echo "<table align = 'center' border = '1' width = '400' height ='750' >";
	echo "<tr>";
	echo "<td colspan = '3' align = 'center'>";
	echo "<h1 align ='center'>".$data[0]['A_Name']."</h1>";
	echo "<img src= ".$data[0]['Picture']." height='300' width='350'".">"."</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td width = '200' height='50'>".$data[0]['A_Tel']."</td>";
	echo "<td width = '200' height='50'>".$data[0]['A_Add']."</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td colspan = '2' height='50'>".$data[0]['A_Content']."</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td colspan = '2' height='300'>"."</td>";
	echo "</tr>";
	echo "</table>";
?>
