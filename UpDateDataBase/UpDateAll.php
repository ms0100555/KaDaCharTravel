<?php 
	@header("Content-Type:text/html; charset=utf8"); 
		require_once("function/global_function.php");

		$data = file_get_contents('http://data.kaohsiung.gov.tw/Opendata/DownLoad.aspx?Type=2&CaseNo1=AV&CaseNo2=1&FileType=1&Lang=C&FolderType=');
		//解析網頁格式JSON

		$get_data = json_decode($data,true);
		//print_r($get_data);
		if (!empty($get_data)) {

			@$row_data = sqlEdit("DELETE FROM attractions");
		}

		else {
			echo "ERROR！";
			exit;
		}	
		
		//-------------------------旅遊景點----------------------------------
		foreach ($get_data as $key ) {
				
	    echo $A_ID = $key['Id'];
	    echo $A_Name = $key['Name'];	
	    echo $A_Content = $key['Toldescribe'];	
	    echo $A_Price = $key['Description'];	
	    echo $A_Tel = $key['Tel'];	
	    echo $A_Add = $key['Add'];	
	    echo $A_Open_Time = $key['Opentime'];	
	    echo $Picture = $key['Picture1'];	
	    echo $Picdescribe = $key['Picdescribe1'];	
	    echo $Web = "";	
	    echo $Lat = $key['Px'];	
	    echo $Lng = $key['Py'];	


		$data=array($A_ID,$A_Name,$A_Content,$A_Price,$A_Tel,$A_Add,$A_Open_Time,$Picture,$Picdescribe,$Web,$Lat,$Lng);

		$row_data = sqlEdit("INSERT INTO attractions (`A_ID`,`A_Name`,`A_Content`,`A_Price`,`A_Tel`,`A_Add`,`A_Open_Time`,`Picture`,`Picdescribe`,`Web`,`Lat`,`Lng`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)",$data);

		}
// -----------------------------美食資訊----------------------------------------

		$data = file_get_contents('http://data.kaohsiung.gov.tw/Opendata/DownLoad.aspx?Type=2&CaseNo1=AV&CaseNo2=2&FileType=1&Lang=C&FolderType=');
		//解析網頁格式JSON

		$get_data = json_decode($data,true); //將json格式轉為陣列格式

		foreach ($get_data as $key ) {
				
	    echo $A_ID = $key['Id'];
	    echo $A_Name = $key['Name'];	
	    echo $A_Content = "";
	    echo $A_Price = $key['Description'];	
	    echo $A_Tel = $key['Tel'];	
	    echo $A_Add = $key['Add'];	
	    echo $A_Open_Time = $key['Opentime'];	
	    echo $Picture = $key['Picture1'];	
	    echo $Picdescribe = $key['Picdescribe1'];	
	    echo $Web = "";	
	    echo $Lat = $key['Px'];	
	    echo $Lng = $key['Py'];	


		$data=array($A_ID,$A_Name,$A_Content,$A_Price,$A_Tel,$A_Add,$A_Open_Time,$Picture,$Picdescribe,$Web,$Lat,$Lng);

		$row_data = sqlEdit("INSERT INTO attractions (`A_ID`,`A_Name`,`A_Content`,`A_Price`,`A_Tel`,`A_Add`,`A_Open_Time`,`Picture`,`Picdescribe`,`Web`,`Lat`,`Lng`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)",$data);

		}

// ---------------------------------旅館資訊------------------------------------
		$data = file_get_contents('http://data.kaohsiung.gov.tw/Opendata/DownLoad.aspx?Type=2&CaseNo1=AV&CaseNo2=4&FileType=2&Lang=C&FolderType=');
		//解析網頁格式JSON

		$get_data = json_decode($data,true); //將json格式轉為陣列格式

		foreach ($get_data as $key ) {
				
	    echo $A_ID = $key['編號'];
	    echo $A_Name = $key['旅宿名稱'];	
	    echo $A_Content = "";
	    echo $A_Price = "";	
	    echo $A_Tel = $key['電話'];	
	    echo $A_Add = $key['地址'];	
	    echo $A_Open_Time = "";	
	    echo $Picture = "";	
	    echo $Picdescribe = "";	
	    echo $Web = $key['網址'];
	    echo $Lat = "";
	    echo $Lng = "";


		$data=array($A_ID,$A_Name,$A_Content,$A_Price,$A_Tel,$A_Add,$A_Open_Time,$Picture,$Picdescribe,$Web,$Lat,$Lng);

		$row_data = sqlEdit("INSERT INTO attractions (`A_ID`,`A_Name`,`A_Content`,`A_Price`,`A_Tel`,`A_Add`,`A_Open_Time`,`Picture`,`Picdescribe`,`Web`,`Lat`,`Lng`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)",$data);

		}
// -----------------------------------------------------------------------------



?>