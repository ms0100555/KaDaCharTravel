<?php 
	@header("Content-Type:text/html; charset=utf8"); 
		require_once("function/global_function.php");



		$data = file_get_contents('http://data.kaohsiung.gov.tw/Opendata/DownLoad.aspx?Type=2&CaseNo1=AV&CaseNo2=4&FileType=2&Lang=C&FolderType=');
		//解析網頁格式JSON

		$get_data = json_decode($data,true); //將json格式轉為陣列格式


		if (!empty($get_data)) {

			@$row_data = sqlEdit("DELETE FROM hotel");
		}

		else {
			echo "ERROR！";
			exit;
		}

		foreach ($get_data as $key ) {
				
	    $A_ID = $key['編號'];
	    $A_Name = $key['旅宿名稱'];	
	    $A_Content = "";
	    $A_Price = "";	
	    $A_Tel = $key['電話'];	
	    $A_Add = $key['地址'];	
	    $A_Open_Time = "";	
	    $Picture = "";	
	    $Picdescribe = "";	
	    $Web = $key['網址'];
	    $Lat = "";
	    $Lng = "";


		$data=array($A_ID,$A_Name,$A_Tel,$A_Add,$Web);

		$row_data = sqlEdit("INSERT INTO hotel (`A_ID`,`A_Name`,`A_Tel`,`A_Add`,`Web`) VALUES (?,?,?,?,?)",$data);

		}

?>