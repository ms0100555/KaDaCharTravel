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
          <li class="active">
            <a href="#"><i class="fa fa-users" style="font-size:18px;"></i> <span class="nav-label" style="font-size:18px;">管理員資訊</span><span class="fa arrow"></span></a>
            <ul style="" class="nav nav-second-level collapse in">
              <li style="font-size:16px;"><a href="staff.php">管理員清單</a></li>
              <li style="font-size:16px;"><a href="addstaff.php">新增管理員</a></li>
              <li style="font-size:16px;" class="active"><a href="user.php">使用者清單</a></li>
            </ul>
          </li>
          <li>
            <a href="#"><i class="fa fa-database" style="font-size:18px;"></i> <span class="nav-label" style="font-size:18px;">資料維護</span><span class="fa arrow"></span></a>
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
          <h2>使用者清單</h2>
        </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                  <h5>使用者列表</h5>
              </div>
              <div class="ibox-content">
                <a href="staff.php" class="btn btn-primary ">管理人員</a>
                <a href="addstaff.php" class="btn btn-primary ">新增管理員</a>
                <a href="user.php" class="btn btn-primary ">使用者清單</a>

                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                      <tr>
                        <th>會員編號</th>
                        <th>帳號</th>
                        <th>姓名</th>
                        <th>Email</th>
                        <th></th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                        // $ID = $_SESSION["Staff_Name"];

                        $staff = sqlQry("SELECT User_ID,User_Name,Account,E_mail FROM user",array());

                        foreach ($staff as $key) {
                          echo "<tr>";
                          echo "<td>".$key['User_ID']."</td>";
                          echo "<td>".$key['Account']."</td>";
                          echo "<td>".$key['User_Name']."</td>";
                          echo "<td>".$key['E_mail']."</td>";
                          echo "<td><input type = 'button' class='btn btn-xs btn-danger delebtn' data-id='".$key['User_ID']."' value = '刪除'></td>";
                          echo "</tr>";
                        }
                      ?>
                    </tbody>

                    <tfoot>
                      <tr>
                        <th>會員編號</th>
                        <th>帳號</th>
                        <th>姓名</th>
                        <th>Email</th>
                        <th></th>
                      </tr>
                    </tfoot>
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
    var btn =  document.querySelectorAll(".delebtn");
    for (var i = 0 ; i < btn.length; i++) {
      btn[i].onclick = function(){
        if (confirm ("確定刪除嗎?")) {
          location.href = "delete_user.php?id="+this.dataset.id;//跳頁並傳值
        }
        else{

        }
      }
    }
  </script> 
</body>

</html>
