<!-- 刪除使用者上傳推薦行程 -->
<?php session_start(); 
    header("Content-Type:text/html; charset=utf-8");
    if($_SESSION["Staff_ID"]==null ) {
        
        echo "<script>";

        echo "alert('尚未登入！')";

        echo "</script>";

        echo "<script>";

        echo "document.location.href='login.php';";

        echo "</script>";
    }
?>
<?php
    @header("Content-Type:text/html; charset=utf8");
    require_once("function/global_function.php");


    $ID = $_GET["id"];

   	$Delete = sqlEdit("DELETE FROM s_route_basic WHERE R_ID = ?", array($ID));

   	$Delete = sqlEdit("DELETE FROM s_route_content WHERE R_ID = ?" ,array($ID));

   	echo "<script>";

	echo "alert('刪除完成！')";
 
	echo "</script>";

	echo "<script>";		

	echo "document.location.href='s_route_basic.php';";

	echo "</script>";
?>