<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaDaChar管理後台</title>
    <link rel="shortcut icon" href="logoohho.ico"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<!-- 首頁 -->
<?php
  session_start();
  require_once("function/global_function.php");
  header("Content-Type:text/html; charset=utf-8");
  checkLoginStatus();
?>
<body>
  <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
          <?php include("common/photo.php"); ?>
          <li>
              <a href="home.php"><i class="fa fa-home" style="font-size:18px;"></i> <span class="nav-label" style="font-size:18px;">首頁</span></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-users" style="font-size:18px;"></i> <span class="nav-label" style="font-size:18px;">管理員資訊</span><span class="fa arrow" style="font-size:18px;"></span></a>
            <ul style="" class="nav nav-second-level collapse">
              <li style="font-size:16px;"><a href="staff.php">管理員清單</a></li>
              <li style="font-size:16px;"><a href="addstaff.php">新增管理員</a></li>
              <li style="font-size:16px;"><a href="user.php">使用者清單</a></li>
            </ul>
          </li>
          <li class="active">
            <a href="#"><i class="fa fa-database" style="font-size:18px;"></i> <span class="nav-label" style="font-size:18px;">資料維護</span><span class="fa arrow" style="font-size:18px;"></span></a>
            <ul style="" class="nav nav-second-level collapse in">
              <li style="font-size:16px;"><a href="view.php">景點清單資訊</a></li>
              <li style="font-size:16px;"><a href="addview.php">新增景點資訊</a></li>
              <li style="font-size:16px;"><a href="food.php">美食清單資訊</a></li>
              <li style="font-size:16px;"><a href="addfood.php">新增美食資訊</a></li>
              <li style="font-size:16px;"><a href="hotel.php">旅館清單資訊</a></li>
              <li style="font-size:16px;" class="active"><a href="addhotel.php">新增旅館資訊</a></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-calendar" style="font-size:18px;"></i> <span class="nav-label" style="font-size:18px;">行程管理</span><span class="fa arrow" style="font-size:18px;"></span></a>
            <ul style="" class="nav nav-second-level collapse">
              <li style="font-size:16px;"><a href="s_route_basic.php">推薦行程管理</a></li>
              <li style="font-size:16px;"><a href="route_basic.php">個人行程管理</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
      <?php include("common/nav.php"); ?>
      <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
          <h2>新增旅館資訊</h2>
        </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
          <div class="col-lg-12">
            <form action="" method="post" name="formAdd" id="formAdd" class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-2 control-label">景點ID(*必填)：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="ID" name="ID">
                </div>
              </div>
              <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">景點名稱：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="Name" name="Name">
                </div>
              </div>
              <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">圖片網址：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="url" id="Picture" name="Picture">
                </div>
              </div>
              <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">景點電話：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="Phone" name="Phone">
                </div>
              </div>
              <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">景點地址：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="Add" name="Add">
                </div>
              </div>              
              <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">景點開放時間：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="OpenTime" name="OpenTime">
                </div>
              </div>
              <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">景點介紹：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="Content" name="Content">
                </div>
              </div>
              <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">景點網址：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="url" id="Web" name="Web">
                </div>
              </div>
            <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">景點經度：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="Lat" name="Lat">
                </div>
              </div>
             <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">景點緯度：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="Lng" name="Lng">
                </div>
              </div>                           
              <div class="hr-line-dashed"></div>
              <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                  <input type="hidden" name="action" value="add">
                  <input type="reset" class="btn btn-white" name="confirm" value="清空">
                  <input type="submit" class="btn btn-primary" id="confirm" name="confirm" value="確認">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php include("common/footer.php"); ?>
    </div>
  </div>
  <!-- Mainly scripts -->
  <script src="js/jquery-2.1.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <!-- Custom and plugin javascript -->
  <script src="js/inspinia.js"></script>
  <script src="js/plugins/pace/pace.min.js"></script>
</body>

</html>
<?php
  if(isset($_POST["action"])&&($_POST["action"]=="add")){
    $ID = $_POST["ID"];
    $Name = $_POST["Name"];
    $Picture = $_POST["Picture"];
    $Phone = $_POST["Phone"];
    $Add = $_POST["Add"];
    $OpenTime = $_POST["OpenTime"];
    $Web = $_POST["Web"];
    $Lat = $_POST["Lat"];
    $Lng = $_POST["Lng"];
    $Content = $_POST["Content"];

    if($ID==null){

      echo "<script>";
      echo "alert('景點編號必填')";
      echo "</script>";

    } else {

      $IDCheck = sqlQry("SELECT * FROM hotel WHERE A_ID=? ",array($ID));

      if (!empty($IDCheck)) {

        echo "<script>";
        echo "alert('已有相同景點')";
        echo "</script>";

      } else {

        $data = array($ID,$Name,$Picture,$Phone,$Add,$OpenTime,$Content,$Web,$Lat,$Lng);
        $data_row = sqlEdit("INSERT INTO hotel (`A_ID`,`A_Name`,`Picture`,`A_Tel`,`A_Add`,`A_Open_Time`,`A_Content`,`Web`,`Lat`,`Lng`) VALUES (?,?,?,?,?,?,?,?,?,?)",$data);

        $data1 = array($ID,$Name,$Picture,$Phone,$Add,$OpenTime,$Content,$Web,$Lat,$Lng);
        $data_row1 = sqlEdit("INSERT INTO attractions (`A_ID`,`A_Name`,`Picture`,`A_Tel`,`A_Add`,`A_Open_Time`,`A_Content`,`Web`,`Lat`,`Lng`) VALUES (?,?,?,?,?,?,?,?,?,?)",$data1);
        echo "<script>";
        echo "alert('新增成功！')";
        echo "</script>";

      }
    }
  }
?>