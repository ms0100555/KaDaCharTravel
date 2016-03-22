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
              <a href="home.php"><i class="fa fa-home" style="font-size:18px;"></i> <span style="font-size:18px;" class="nav-label">首頁</span></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-users" style="font-size:18px;"></i> <span style="font-size:18px;" class="nav-label">管理員資訊</span><span class="fa arrow"></span></a>
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
            <a href="#"><i class="fa fa-calendar" style="font-size:18px;"></i> <span style="font-size:18px;" class="nav-label">行程管理</span><span class="fa arrow"></span></a>
            <ul style="" class="nav nav-second-level collapse in">
              <li style="font-size:16px;"><a href="s_route_basic.php">推薦行程管理</a></li>
              <li style="font-size:16px;" class="active"><a href="route_basic.php">個人行程管理</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    
    <div id="page-wrapper" class="gray-bg">
      <?php include("common/nav.php"); ?>
      <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
          <h2>個人行程管理</h2>
        </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <h5>個人行程列表</h5>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <tbody>
                      <?php

                      $data = sqlQry("SELECT * FROM route_basic ",array());
                      foreach ($data as $key ) {
                          echo "<table width='700'height = '60' border = '0' cellspacing='0' >";
                          
                          echo "<tr>";

                          echo "<th width='50 ' height = '20' bgcolor= '#afb4db'>".'編號：'."</th>"."<td width='20 ' height = '20' bgcolor= '#afb4db'>".$key['R_ID']."</td>";

                          echo "<th width='50' height = '20' bgcolor= '#a3cf62' >".'名稱：'."</th>"."<td  width='250 ' height = '20' bgcolor= '#a3cf62'>"."<a href = 'route_content.php?id=".$key['R_ID']."'>".$key['R_Name']."</a>"."</td>";

                          echo "<th width='70' height = '20' bgcolor= '#b7ba6b'>".'總天數：'."</th>"."<td width='20 ' height = '20' bgcolor= '#b7ba6b'>".$key['Days']."</td>";

                          echo "<th width='50' height = '20' bgcolor= '#7bbfea'>".'作者：'."</th>"."<td width='100 ' height = '20' bgcolor= '#7bbfea'>".$key['Author']."</td>";

                          echo "<td width='50' align = 'center'><input type = 'button' class='btn dele_btn' data-id='".$key['R_ID']."' value = '刪除'></td>";

                          // echo "<td><button class='.btn' onclick=javascript:location.href='delete_route.php?id=".$key['R_ID']."'></button></td>";
                          echo "</tr>";



                          echo "</table>";
                          
                          echo "<p>";
                          echo "<p>";
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
  <script>
var btn =  document.querySelectorAll(".dele_btn");
    for (var i = 0 ; i < btn.length; i++) {
        btn[i].onclick = function(){
            if (confirm ("確定刪除嗎?")) {
                location.href = "delete_route.php?id="+this.dataset.id;//跳頁並傳值
            }
            else{

            }
        }
    }
</script> 
</body>

</html>
