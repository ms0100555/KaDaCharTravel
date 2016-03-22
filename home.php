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
          <li class="active">
              <a href="home.php"><i class="fa fa-home" style="font-size:18px;"></i> <span style="font-size:18px;" class="nav-label">首頁</span></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-users"></i> <span class="nav-label" style="font-size:18px;">管理員資訊</span><span style="font-size:18px;" class="fa arrow"></span></a>
            <ul style="" class="nav nav-second-level collapse">
              <li style="font-size:16px;"><a href="staff.php">管理員清單</a></li>
              <li style="font-size:16px;"><a href="addstaff.php">新增管理員</a></li>
              <li style="font-size:16px;"><a href="user.php">使用者清單</a></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-database" style="font-size:18px;"></i> <span style="font-size:18px;" class="nav-label">資料維護</span><span class="fa arrow"></span></a>
            <ul style="" class="nav nav-second-level collapse">
              <li style="font-size:16px;"><a href="view.php">景點清單資訊</a></li>
              <li style="font-size:16px;"><a href="addview.php">新增景點資訊</a></li>
              <li style="font-size:16px;"><a href="food.php">美食清單資訊</a></li>
              <li style="font-size:16px;"><a href="addfood.php">新增美食資訊</a></li>
              <li style="font-size:16px;"><a href="hotel.php">旅館清單資訊</a></li>
              <li style="font-size:16px;"><a href="addhotel.php">新增旅館資訊</a></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-calendar" style="font-size:18px;"></i> <span style="font-size:18px;" class="nav-label">行程管理</span><span class="fa arrow"></span></a>
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
          <h2>首頁</h2>
        </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
          <div class="col-lg-12">
            <div class="jumbotron">
              <h1>管理員公告</h1>
              <p>歡迎使用 KaDaChar Travel 後端系統！請謹慎使用，以免誤刪重要資料！</p>
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
