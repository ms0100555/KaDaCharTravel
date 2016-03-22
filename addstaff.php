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
              <a href="home.php"><i class="fa fa-home" style="font-size:18px;"></i> <span class="nav-label" style="font-size:18px;">首頁</span></a>
          </li>
          <li class="active">
            <a href="#"><i class="fa fa-users" style="font-size:18px;"></i> <span class="nav-label" style="font-size:18px;">管理員資訊</span><span style="font-size:18px;" class="fa arrow"></span></a>
            <ul style="" class="nav nav-second-level collapse in">
              <li style="font-size:16px;"><a href="staff.php">管理員清單</a></li>
              <li style="font-size:16px;" class="active"><a href="addstaff.php">新增管理員</a></li>
              <li style="font-size:16px;"><a href="user.php">使用者清單</a></li>
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
          <h2>新增管理員</h2>
        </div>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
          <div class="col-lg-12">
            <form action="" method="post" name="formAdd" id="formAdd" class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-2 control-label">帳號：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="Acc" name="Acc">
                </div>
              </div>
              <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">密碼：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="password" id="password" name="password">
                </div>
              </div>
              <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">請再次輸入密碼：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="password" id="password2" name="password2">
                </div>
              </div>
              <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">姓名：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="Name" name="Name">
                </div>
              </div>              
              <div class="hr-line-dashed"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">E-mail：</label>
                <div class="col-sm-10">
                  <input class="form-control" type="email" id="E_mail" name="E_mail">
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

  $ACC = $_POST["Acc"];
  $Name = $_POST["Name"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];
  $E_mail = $_POST["E_mail"];

  $AccCheck = sqlQry("SELECT * FROM staff WHERE Acc=? ",array($ACC));


    if ($password != $password2) {
      
      echo "<script>";

      echo "alert('請輸入相同密碼！')";

      echo "</script>";

      echo "<script>";

      echo "document.location.href='addstaff.php'";

      echo "</script>";

    }
    else if(empty($ACC)){

      echo "<script>";

      echo "alert('帳號請勿空值！')";

      echo "</script>";

      echo "<script>";

      echo "document.location.href='addstaff.php'";

      echo "</script>";

    }

    else if(empty($Name)){

      echo "<script>";

      echo "alert('姓名請勿空值！')";

      echo "</script>";

      echo "<script>";

      echo "document.location.href='addstaff.php'";

      echo "</script>";

    }

    else if(empty($password)||empty($password)){

      echo "<script>";

      echo "alert('密碼請勿空值！')";

      echo "</script>";

      echo "<script>";

      echo "document.location.href='addstaff.php'";

      echo "</script>";

    }

    else if(isset($AccCheck[0]['ID'])){

        echo "<script>";

        echo "alert('已有相同帳號存在，請重新填寫！')";

        echo "</script>";

        echo "<script>";

        echo "document.location.href='addstaff.php'";

        echo "</script>";
  }

    else{

      echo "<script>";

      echo "alert('新增成功！')";

      echo "</script>";

      echo "<script>";

      echo "document.location.href='staff.php'";

      echo "</script>";

      /*if (empty($E_mail)) {
          $E_mail = "";
      }*/
      $data = array($Name,$ACC,$password,$E_mail);
      $data_row = sqlEdit("INSERT INTO staff (`Name`,`Acc`,`Pwd`,`E_mail`) VALUES (?,?,?,?)",$data);
    }

  }
?>