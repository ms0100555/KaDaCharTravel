<?php 
	@header("Content-Type:text/html; charset=utf8"); 
		require_once("function/global_function.php");

		 $tt = '[
{"Kind":"hos","S_ID":1502060014,"Name":"蕭志文醫院","Address":"高雄市新興區七賢一路一Ｏ二號","Lat":22.633893,"Lng":120.314222},
{"Kind":"hos","S_ID":1502060112,"Name":"原祿骨科醫院","Address":"高雄市新興區中正三路５２號","Lat":22.631163,"Lng":120.309125},
{"Kind":"hos","S_ID":1502060149,"Name":"惠仁醫院","Address":"高雄市新興區中山一路６７之２號","Lat":22.62982,"Lng":120.301432},
{"Kind":"hos","S_ID":1502061208,"Name":"新華醫院","Address":"高雄市新興區七賢二路97號地下1層，地上1至6層","Lat":22.633777,"Lng":120.298466},
{"Kind":"hos","S_ID":1507330011,"Name":"七賢脊椎外科醫院","Address":"高雄市新興區七賢一路420號B1-8樓","Lat":22.63447,"Lng":120.306047},
{"Kind":"hos","S_ID":1502060041,"Name":"靜和醫院","Address":"高雄市新興區民族二路176,178,180,182號","Lat":22.636162,"Lng":120.314077},
{"Kind":"hos","S_ID":3307330019,"Name":"高雄醫學大學附設中和紀念醫院牙科第一門診部","Address":"高雄市新興區中山一路14-27號一樓二樓","Lat":22.626511,"Lng":120.302108},
{"Kind":"hos","S_ID":9102070020,"Name":"高雄市立大同醫院(委託財團法人私立高雄醫學大學附設中和紀念醫院經營)","Address":"高雄市前金區中華三路68號","Lat":22.62711,"Lng":120.297333},
{"Kind":"hos","S_ID":9802070015,"Name":"高雄市立中醫醫院","Address":"高雄市前金區中華三路68號1-4樓部分樓層(新盛街入口)","Lat":22.626581,"Lng":120.325404},
{"Kind":"hos","S_ID":1502070029,"Name":"重仁骨科醫院","Address":"高雄市前金區中華三路２４７號１至６樓","Lat":22.634344,"Lng":120.293795},
{"Kind":"hos","S_ID":1502070118,"Name":"健新醫院","Address":"高雄市前金區七賢二路２９５號","Lat":22.631255,"Lng":120.290838},
{"Kind":"hos","S_ID":1507340017,"Name":"中正骨科醫院","Address":"高雄市前金區中正四路100號地下一樓，地上十三樓","Lat":22.630499,"Lng":120.298337},
{"Kind":"hos","S_ID":1507340026,"Name":"上琳醫院","Address":"高雄市前金區自強一路67號B1-7樓","Lat":22.631169,"Lng":120.292757},
{"Kind":"hos","S_ID":1507350013,"Name":"聖和醫院","Address":"高雄市前金區青年二路6號1-4樓","Lat":22.620019,"Lng":120.301666},
{"Kind":"hos","S_ID":9102080017,"Name":"高雄市立民生醫院","Address":"高雄市苓雅區凱旋二路１３４號","Lat":22.626658,"Lng":120.323591},
{"Kind":"hos","S_ID":9102080026,"Name":"高雄市立凱旋醫院","Address":"高雄市苓雅區凱旋二路一三Ｏ號","Lat":22.625123,"Lng":120.32404},
{"Kind":"hos","S_ID":9502080015,"Name":"國軍高雄總醫院附設民眾診療服務處","Address":"高雄市苓雅區建軍路５號","Lat":22.626082,"Lng":120.34104},
{"Kind":"hos","S_ID":9902080013,"Name":"阮綜合醫療社團法人阮綜合醫院","Address":"高雄市苓雅區成功一路162號.四維四路136號.166號.永昌街49號","Lat":22.615377,"Lng":120.297785},
{"Kind":"hos","S_ID":9907350010,"Name":"乃榮醫療社團法人乃榮醫院","Address":"高雄市苓雅區三多二路226.228號.地下1樓-5樓","Lat":22.618738,"Lng":120.318784},
{"Kind":"hos","S_ID":1107350015,"Name":"天主教聖功醫療財團法人聖功醫院","Address":"高雄市苓雅區建國一路352號","Lat":22.633159,"Lng":120.323967},
{"Kind":"hos","S_ID":1202080029,"Name":"信義醫療財團法人高雄基督教醫院","Address":"高雄市苓雅區華新街８６號","Lat":22.613921,"Lng":120.296243},
{"Kind":"hos","S_ID":1502081175,"Name":"邱外科醫院","Address":"高雄市苓雅區成功一路１３７號1-6樓","Lat":22.614585,"Lng":120.297387},
{"Kind":"hos","S_ID":9102020011,"Name":"高雄市立聯合醫院","Address":"高雄市鼓山區中華一路976號","Lat":22.654924,"Lng":120.29118},
{"Kind":"hos","S_ID":1502020056,"Name":"聖明醫院","Address":"高雄市鼓山區鼓山三路５２號","Lat":22.655084,"Lng":120.275539},
{"Kind":"hos","S_ID":1502020065,"Name":"正大醫院","Address":"高雄市鼓山區鼓山三路１２８號之９、葆禎路２６３、２６５號","Lat":22.663895,"Lng":120.279616},
{"Kind":"hos","S_ID":1507290012,"Name":"生安婦產小兒科醫院","Address":"高雄市鼓山區美術東二路177號B2-11F","Lat":22.662455,"Lng":120.288238},
{"Kind":"hos","S_ID":1307370011,"Name":"高雄市立旗津醫院(委託財團法人私立高雄醫學大學經營)","Address":"高雄市旗津區旗港路33號B1-4樓","Lat":22.59044,"Lng":120.285373},
{"Kind":"hos","S_ID":1502090138,"Name":"二聖醫院","Address":"高雄市前鎮區二聖一路７１號英明一路１４４號","Lat":22.611851,"Lng":120.324791},
{"Kind":"hos","S_ID":1502090209,"Name":"吳昆哲婦產小兒科醫院","Address":"高雄市前鎮區民權二路４３０號","Lat":22.612011,"Lng":120.314387},
{"Kind":"hos","S_ID":1502091297,"Name":"佳欣婦幼醫院","Address":"高雄市前鎮區三多三路一四九號","Lat":22.615604,"Lng":120.310259},
{"Kind":"hos","S_ID":1502091313,"Name":"正薪醫院","Address":"高雄市前鎮區一心一路233號1-3樓","Lat":22.60791,"Lng":120.317751},
{"Kind":"hos","S_ID":1502091340,"Name":"瑞祥醫院","Address":"高雄市前鎮區班超路92號地下1樓，地上1-7樓","Lat":22.602682,"Lng":120.324947},
{"Kind":"hos","S_ID":9907320012,"Name":"愛仁醫療社團法人愛仁醫院","Address":"高雄市三民區民族一路45號1樓至4樓及49、51號1樓至4樓","Lat":22.641752,"Lng":120.313838},
{"Kind":"hos","S_ID":1302050014,"Name":"財團法人私立高雄醫學大學附設中和紀念醫院","Address":"高雄市三民區十全一路100號","Lat":22.645752,"Lng":120.309959},
{"Kind":"hos","S_ID":1502051435,"Name":"宏明醫院","Address":"高雄市三民區建國三路４１５號","Lat":22.636209,"Lng":120.291489},
{"Kind":"hos","S_ID":1502050045,"Name":"德謙醫院","Address":"高雄市三民區九如二路１８號地下1樓至6樓","Lat":22.64066,"Lng":120.313184},
{"Kind":"hos","S_ID":1502050152,"Name":"南山醫院","Address":"高雄市三民區建國三路１５１.１５３號1~3樓","Lat":22.63767,"Lng":120.298496},
{"Kind":"hos","S_ID":1502050170,"Name":"祐生醫院","Address":"高雄市三民區建國三路６０號","Lat":22.638021,"Lng":120.296134},
{"Kind":"hos","S_ID":1502050241,"Name":"民族醫院","Address":"高雄市三民區民族一路880號(地下一樓.地上一至七樓)","Lat":22.668623,"Lng":120.317361},
{"Kind":"hos","S_ID":1502050296,"Name":"文雄醫院","Address":"高雄市三民區察哈爾二街１３２號地下１層地上１至4層","Lat":22.647974,"Lng":120.299467},
{"Kind":"hos","S_ID":1502051337,"Name":"謝外科醫院","Address":"高雄市三民區河北一路３３０號","Lat":22.636885,"Lng":120.303154},
{"Kind":"hos","S_ID":1502051364,"Name":"全民醫院","Address":"高雄市三民區九如二路501.503.505.507.509號1- 4樓","Lat":22.641415,"Lng":120.29847},
{"Kind":"hos","S_ID":1502051426,"Name":"四季台安醫院","Address":"高雄市三民區聯興路157號(地下1樓至6樓)、高雄市三民區聯興路145巷1號1-3樓","Lat":22.659481,"Lng":120.313896},
{"Kind":"hos","S_ID":1507320015,"Name":"新高醫院","Address":"高雄市三民區莊敬路288號1-9樓","Lat":22.649945,"Lng":120.318178},
{"Kind":"hos","S_ID":1502040021,"Name":"健仁醫院","Address":"高雄市楠梓區楠陽路１３６號朝明路１３０巷７弄１號１-５樓","Lat":22.723668,"Lng":120.329092},
{"Kind":"hos","S_ID":1502040076,"Name":"顏威裕醫院","Address":"高雄市楠梓區後昌路826號1-7樓","Lat":22.711156,"Lng":120.295672},
{"Kind":"hos","S_ID":1502041108,"Name":"長春醫院","Address":"高雄市楠梓區右昌街331號1-5樓","Lat":22.71429,"Lng":120.289093},
{"Kind":"hos","S_ID":1502041117,"Name":"右昌聯合醫院","Address":"高雄市楠梓區軍校路930號B1-9F","Lat":22.713533,"Lng":120.291035},
{"Kind":"hos","S_ID":1102110011,"Name":"高雄市立小港醫院(委託財團法人私立高雄醫學大學經營)","Address":"高雄市小港區山明里山明路四八二號B1-10樓","Lat":22.567359,"Lng":120.363101},
{"Kind":"hos","S_ID":1502110064,"Name":"安泰醫院","Address":"高雄市小港區沿海一路219、221號漢民路253、255、257號(地下1樓~5樓)","Lat":22.566588,"Lng":120.352492},
{"Kind":"hos","S_ID":1502111098,"Name":"臨海醫院","Address":"高雄市小港區沿海一路店鎮里四六一號一至七樓","Lat":22.561709,"Lng":120.356931},
{"Kind":"hos","S_ID":1502111089,"Name":"戴銘浚婦兒醫院","Address":"高雄市小港區宏平路正苓里661號1至7樓","Lat":22.569615,"Lng":120.351201},
{"Kind":"hos","S_ID":9502030015,"Name":"國軍高雄總醫院左營分院附設民眾診療服務處","Address":"高雄市左營區軍校路５５３號","Lat":22.7014,"Lng":120.290419},
{"Kind":"hos","S_ID":9602030026,"Name":"高雄榮民總醫院","Address":"高雄市左營區大中一路３８６號","Lat":22.677535,"Lng":120.322499},
{"Kind":"hos","S_ID":1502031095,"Name":"馨蕙馨醫院","Address":"高雄市左營區明誠二路五四一號","Lat":22.660481,"Lng":120.303905},
{"Kind":"hos","S_ID":1507300013,"Name":"博正醫院","Address":"高雄市左營區博愛二路100號地下1樓至5樓","Lat":22.658136,"Lng":120.303754},
{"Kind":"hos","S_ID":1502031102,"Name":"柏仁醫院","Address":"高雄市左營區博愛二路350號地下1樓至地上1-5樓","Lat":22.664387,"Lng":120.30356},
{"Kind":"hos","S_ID":9542020011,"Name":"國軍高雄總醫院岡山分院附設民眾診療服務處","Address":"高雄市岡山區大義二路１號","Lat":22.789424,"Lng":120.285278},
{"Kind":"hos","S_ID":9942020019,"Name":"高雄市立岡山醫院（委託秀傳醫療社團法人經營）","Address":"高雄市岡山區壽天路12號","Lat":22.796794,"Lng":120.294548},
{"Kind":"hos","S_ID":1542020058,"Name":"劉嘉修醫院","Address":"高雄市岡山區岡山路４２８號1,2,3,6樓及 4 2 6號1,2,3樓","Lat":22.795717,"Lng":120.295818},
{"Kind":"hos","S_ID":1542020067,"Name":"劉光雄醫院","Address":"高雄市岡山區岡山路３８０之１號","Lat":22.794264,"Lng":120.295962},
{"Kind":"hos","S_ID":1542021171,"Name":"惠川醫院","Address":"高雄市岡山區岡山路92號","Lat":22.78791,"Lng":120.29683},
{"Kind":"hos","S_ID":1542020129,"Name":"樂安醫院","Address":"高雄市岡山區通校路３００號","Lat":22.792482,"Lng":120.281228},
{"Kind":"hos","S_ID":1542150033,"Name":"溫有諒醫院","Address":"高雄市路竹區延平路５７號","Lat":22.858033,"Lng":120.258648},
{"Kind":"hos","S_ID":1542150042,"Name":"高新醫院","Address":"高雄市路竹區中山路６２７號","Lat":22.865433,"Lng":120.257137},
{"Kind":"hos","S_ID":1542140046,"Name":"長佑醫院","Address":"高雄市阿蓮區中山路１５０號","Lat":22.87754,"Lng":120.327796},
{"Kind":"hos","S_ID":9907120012,"Name":"燕巢靜和醫療社團法人燕巢靜和醫院","Address":"高雄市燕巢區深水里深水路3之20號1~5樓","Lat":22.781489,"Lng":120.416385},
{"Kind":"hos","S_ID":1142120001,"Name":"義大醫療財團法人義大醫院","Address":"高雄市燕巢區角宿里義大路1號","Lat":22.765944,"Lng":120.364261},
{"Kind":"hos","S_ID":1542110020,"Name":"泰和醫院","Address":"高雄市橋頭區成功路１０１號","Lat":22.758813,"Lng":120.309625},
{"Kind":"hos","S_ID":1142010518,"Name":"高雄市立鳳山醫院（委託長庚醫療財團法人經營）","Address":"高雄市鳳山區經武路42號","Lat":22.62824,"Lng":120.362971},
{"Kind":"hos","S_ID":1507010014,"Name":"新高鳳醫院","Address":"高雄市鳳山區光遠路360號1~7樓","Lat":22.626187,"Lng":120.358823},
{"Kind":"hos","S_ID":1542010052,"Name":"大東醫院","Address":"高雄市鳳山區光遠路171-2號","Lat":22.625361,"Lng":120.362056},
{"Kind":"hos","S_ID":1542010141,"Name":"優生婦產科醫院","Address":"高雄市鳳山區自由路１８９號","Lat":22.625558,"Lng":120.351019},
{"Kind":"hos","S_ID":1542011237,"Name":"惠德醫院","Address":"高雄市鳳山區福祥街81號及同號2樓","Lat":22.592103,"Lng":120.325082},
{"Kind":"hos","S_ID":1542011246,"Name":"仁惠婦幼醫院","Address":"高雄市鳳山區自由路81號","Lat":22.625798,"Lng":120.353289},
{"Kind":"hos","S_ID":1542011282,"Name":"杏和醫院","Address":"高雄市鳳山區五甲二路389號、470號1樓","Lat":22.597671,"Lng":120.335631},
{"Kind":"hos","S_ID":1842011082,"Name":"馬光中醫醫院","Address":"高雄市鳳山區維新路122號1、2樓","Lat":22.624633,"Lng":120.361679},
{"Kind":"hos","S_ID":1442060014,"Name":"財團法人台灣省私立高雄仁愛之家附設慈惠醫院","Address":"高雄市大寮區鳳屏一路509號","Lat":22.638814,"Lng":120.39775},
{"Kind":"hos","S_ID":1542061077,"Name":"樂生婦幼醫院","Address":"高雄市大寮區鳳林三路532號","Lat":22.606867,"Lng":120.395494},
{"Kind":"hos","S_ID":1542061148,"Name":"瑞生醫院","Address":"高雄市大寮區鳳林四路192號","Lat":22.617686,"Lng":120.384819},
{"Kind":"hos","S_ID":1542050056,"Name":"建佑醫院","Address":"高雄市林園區東林西路360、362號、364巷10號、399號、407巷7號","Lat":22.50382,"Lng":120.38668},
{"Kind":"hos","S_ID":1542051151,"Name":"霖園醫院","Address":"高雄市林園區林園北路244號","Lat":22.509039,"Lng":120.394663},
{"Kind":"hos","S_ID":1142100017,"Name":"長庚醫療財團法人高雄長庚紀念醫院","Address":"高雄市鳥松區大埤路１２３號","Lat":22.64974,"Lng":120.354119},
{"Kind":"hos","S_ID":9142030019,"Name":"衛生福利部旗山醫院","Address":"高雄市旗山區中學路６０號","Lat":22.880561,"Lng":120.483243},
{"Kind":"hos","S_ID":9907030013,"Name":"廣聖醫療社團法人廣聖醫院","Address":"高雄市旗山區中華路618號1-6樓","Lat":22.884926,"Lng":120.48555},
{"Kind":"hos","S_ID":1542030018,"Name":"重安醫院","Address":"高雄市旗山區大仁街14、16、18、20、22、24、26號","Lat":22.88302,"Lng":120.484839},
{"Kind":"hos","S_ID":1542030063,"Name":"博愛醫院","Address":"高雄市旗山區延平一路６８９號","Lat":22.883631,"Lng":120.483189},
{"Kind":"hos","S_ID":1542030116,"Name":"溪洲醫院","Address":"高雄市旗山區延平一路４１２、408號","Lat":22.892875,"Lng":120.483098},
{"Kind":"hos","S_ID":1542040050,"Name":"三聖醫院","Address":"高雄市美濃區合和里合和路56號及58號，成功路182-2號","Lat":22.894058,"Lng":120.548114}
]';

 $array = json_decode($tt,true);

 //print_r($array);

foreach ($array as $key) {

	
	$data = array($key["S_ID"],$key["Name"],$key["Kind"],$key["Address"],$key["Lat"],$key["Lng"]);

	$data_row = sqlEdit("INSERT INTO shop (`S_ID`,`Name`,`Kind`,`Address`,`Lng`,`Lat`)
	VALUES (?,?,?,?,?,?)",$data);


}

?>