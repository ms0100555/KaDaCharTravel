<?php 
	@header("Content-Type:text/html; charset=utf8"); 
		require_once("function/global_function.php");

		$data = file_get_contents('http://data.kaohsiung.gov.tw/Opendata/DownLoad.aspx?Type=2&CaseNo1=AV&CaseNo2=1&FileType=1&Lang=C&FolderType=');
		//解析網頁格式JSON

		$get_data = json_decode($data,true);
		//print_r($get_data);
		if (!empty($get_data)) {

			@$row_data = sqlEdit("DELETE FROM view");
			@$row_data2 = sqlEdit("DELETE FROM food");
		}

		else {
			echo "ERROR！";
			exit;
		}	
		
		//-------------------------旅遊景點----------------------------------
		foreach ($get_data as $key ) {
				
	     $A_ID = $key['Id'];
	     $A_Name = $key['Name'];	
	     $A_Content = $key['Toldescribe'];	
	     $A_Price = $key['Description'];	
	     $A_Tel = $key['Tel'];	
	     $A_Add = $key['Add'];	
	     $A_Open_Time = $key['Opentime'];	
	     $Picture = $key['Picture1'];	
	     $Picdescribe = $key['Picdescribe1'];	
	     $Web = "";	
	     $Lat = $key['Px'];	
	     $Lng = $key['Py'];	


		$data=array($A_ID,$A_Name,$A_Content,$A_Price,$A_Tel,$A_Add,$A_Open_Time,$Picture,$Picdescribe,$Lat,$Lng);

		$row_data = sqlEdit("INSERT INTO view (`A_ID`,`A_Name`,`A_Content`,`A_Price`,`A_Tel`,`A_Add`,`A_Open_Time`,`Picture`,`Picdescribe`,`Lat`,`Lng`) VALUES (?,?,?,?,?,?,?,?,?,?,?)",$data);

		}

// -----------------------------美食資訊----------------------------------------

		$data = file_get_contents('http://data.kaohsiung.gov.tw/Opendata/DownLoad.aspx?Type=2&CaseNo1=AV&CaseNo2=2&FileType=1&Lang=C&FolderType=');
		//解析網頁格式JSON

		$get_data = json_decode($data,true); //將json格式轉為陣列格式

		foreach ($get_data as $key ) {
				
	     $A_ID = $key['Id'];
	     $A_Name = $key['Name'];	
	     $A_Content = $key['Description'];
	     $A_Tel = $key['Tel'];	
	     $A_Add = $key['Add'];	
	     $A_Open_Time = $key['Opentime'];	
	     $Picture = $key['Picture1'];	
	     $Picdescribe = $key['Picdescribe1'];	
	     $Lat = $key['Px'];	
	     $Lng = $key['Py'];	

		
		$data = array($A_ID,$A_Name,$A_Content,$A_Tel,$A_Add,$A_Open_Time,$Picture,$Picdescribe,$Lat,$Lng);
		$row_data2 = sqlEdit("INSERT INTO food (`Id`,`Name`,`Description`,`Tel`,`Add`,`Opentime`,`Picture1`,`Picdescribe1`,`Px`,`Py`) VALUES (	?,?,?,?,?,?,?,?,?,?)",$data);
		}
?>