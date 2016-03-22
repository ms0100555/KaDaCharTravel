<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaDaChar管理後台</title>
    <link rel="shortcut icon" href="logoohho.ico">    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

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
          <li>
            <a href="#"><i style="font-size:18px;" class="fa fa-database"></i> <span style="font-size:18px;" class="nav-label">資料維護</span><span class="fa arrow"></span></a>
            <ul style="" class="nav nav-second-level collapse">
              <li style="font-size:16px;"><a href="view.php">景點清單資訊</a></li>
              <li style="font-size:16px;"><a href="addview.php">新增景點資訊</a></li>
              <li style="font-size:16px;"><a href="food.php">美食清單資訊</a></li>
              <li style="font-size:16px;"><a href="addfood.php">新增美食資訊</a></li>
              <li style="font-size:16px;"><a href="hotel.php">旅館清單資訊</a></li>
              <li style="font-size:16px;"><a href="addhotel.php">新增旅館資訊</a></li>
            </ul>
          </li>
          <li class="active">
            <a href="#"><i style="font-size:18px;" class="fa fa-calendar"></i> <span style="font-size:18px;" class="nav-label">行程管理</span><span class="fa arrow"></span></a>
            <ul style="" class="nav nav-second-level collapse in">
              <li style="font-size:16px;" class="active"><a href="s_route_basic.php">推薦行程管理</a></li>
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
          <h2>推薦行程管理</h2>
        </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <h5>推薦行程詳細資訊</h5>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <tbody>
                      <?php
                        $ID = $_GET["id"];

                        $data = sqlQry("SELECT * FROM s_route_content WHERE R_ID = ? ORDER BY `Day` ,`array`",array($ID));

                        foreach ($data as $key ) {

                            $row_data = sqlQry("SELECT * FROM attractions WHERE A_ID = ? ",array($key["A_ID"]));

                            if(is_array($row_data) && !empty($row_data)){

                                foreach ($row_data as $keys ) {
                                 

                                
                                echo "<table width='650'height = '155' border = '0' cellspacing='0' >";
                                echo "<th width='200' rowspan='4' bgcolor= '#a3cf62'>"."<align = 'left'>"."<img src= ".$keys['Picture']. " height='150' width='200'".">"."</align>"."</font>"."</th>";
                                echo "<tr>";
                                echo "<th width='50' height = '60' bgcolor= '#a3cf62' >".'名稱'."</th>"."<td width='300'  height = '50' bgcolor= '#a3cf62'>".$keys['A_Name']."</td>";
                                echo "<td width='100' bgcolor= '#7fb80e'>"."停留時間："."<br>".$key["Stay_Time_Hour"]."小時".$key["Stay_Time_Min"]."分鐘"."</td>";
                                echo "</tr>";

                                echo "<tr>";
                                echo "<td width='450'  height = '50' bgcolor= '#b7ba6b' colspan = '3'>"."<b>"."電話　"."</b>".$keys['A_Tel']."</td>";
                                echo "</tr>";

                                echo "<tr>";
                                echo "<td width='450'  height = '50' bgcolor= '#b7ba6b' colspan = '3'>"."<b>"."地址　"."</b>".$keys['A_Add']."</td>";
                                echo "</tr>";


                                 
                                echo "</table>";

                                echo "路程時間：".$key['R_H']."小時".$key['R_M']."分鐘";


                                

                                echo "<p>";
                                echo "<p>";
                                }
                            }

                        }
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
