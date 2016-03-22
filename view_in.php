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
    <style>
      .attractions_picture {
        width:200px;
      }
    </style>
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
              <a href="home.php"><i style="font-size:18px;" class="fa fa-home"></i> <span style="font-size:18px;" class="nav-label">首頁</span></a>
          </li>
          <li>
            <a href="#"><i style="font-size:18px;" class="fa fa-users"></i> <span style="font-size:18px;" class="nav-label">管理員資訊</span><span class="fa arrow"></span></a>
            <ul style="" class="nav nav-second-level collapse">
              <li style="font-size:16px;"><a href="staff.php">管理員清單</a></li>
              <li style="font-size:16px;"><a href="addstaff.php">新增管理員</a></li>
              <li style="font-size:16px;"><a href="user.php">使用者清單</a></li>
            </ul>
          </li>
          <li class="active">
              <a href="view.php"><i style="font-size:18px;" class="fa fa-database"></i> <span style="font-size:18px;" class="nav-label">資料維護</span></a>
              <ul style="" class="nav nav-second-level collapse in">
              <li style="font-size:16px;" class="active"><a href="view.php">景點清單資訊</a></li>
              <li style="font-size:16px;"><a href="addview.php">新增景點資訊</a></li>
              <li style="font-size:16px;"><a href="food.php">美食清單資訊</a></li>
              <li style="font-size:16px;"><a href="addfood.php">新增美食資訊</a></li>
              <li style="font-size:16px;"><a href="hotel.php">旅館清單資訊</a></li>
              <li style="font-size:16px;"><a href="addhotel.php">新增旅館資訊</a></li>
              </ul>
          </li>
          <li>
             <a href="#"><i class="fa fa-calendar" style="font-size:18px;"></i> <span class="nav-label" style="font-size:18px;">行程管理</span><span class="fa arrow"></span></a>
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
          <h2>景點清單</h2>
        </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <h5>景點詳細資訊</h5>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <tbody>
                      <?php
                        $ID = $_GET["id"];

                        $data = sqlQry("SELECT * FROM view WHERE A_ID = ?",array($ID));
                        echo "<center>";

                        echo " <h1>".$data[0]['A_Name']."</h1>";
                        echo "<td> <a href = 'viewupdate.php?ID=".$ID." & Name=".$data[0]['A_Name']."& Photo=".$data[0]['Picture']."& Phone=".$data[0]['A_Tel']."& Add=".$data[0]['A_Add']."& Content=".$data[0]['A_Content']."& Lat=".$data[0]['Lat']."& Lng=".$data[0]['Lng']."'> 修改景點資訊 </a> </td>";

                        echo "<table align = 'center' border = '1' width = '400' height ='750' >";
                        echo "<tr>";
                        echo "<td colspan = '3' align = 'center'>";
                        echo "<img src= ".$data[0]['Picture']." height='300' width='350'".">"."</td>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "<td width = '200' height='50'>"."電話：".$data[0]['A_Tel']."</td>";
                        echo "<td width = '200' height='50'>"."地址：".$data[0]['A_Add']."</td>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "<td width = '200' height='50'>"."經度：".$data[0]['Lat']."</td>";
                        echo "<td width = '200' height='50'>"."緯度：".$data[0]['Lng']."</td>";
                        echo "</tr>";

                        echo "<tr>";
                         if($data[0]['A_Content'] == null){
                          echo "<td colspan = '2' height='50'>簡介：暫無資料</td>";
                        }else{
                          echo "<td colspan = '2' height='50'>簡介：<br>".$data[0]['A_Content']."</td>";
                        }
                        echo "</tr>";
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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
