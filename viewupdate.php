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
              <li class="active"><a href="view.php">景點清單資訊</a></li>
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
                  <h5>修改詳細資訊</h5>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <?php
                    $ID = $_GET["ID"];
                    $Name = $_GET["Name"];
                    $Photo = $_GET["Photo"];
                    $Phone = $_GET["Phone"];
                    $Add = $_GET["Add"];
                    $Content = $_GET["Content"];
                    $Lat = $_GET["Lat"];
                    $Lng = $_GET["Lng"];

                    if(isset($_POST["login"])&&($_POST["login"]=="go")){

                      $post_ID = $_POST["ID"];
                      $post_Name = $_POST["Name"];
                      $post_Photo = $_POST["Photo"];
                      $post_Phone = $_POST["Phone"];
                      $post_Add = $_POST["Add"];
                      $post_Content = $_POST["Content"];
                      $post_Lat = $_POST["Lat"];
                      $post_Lng = $_POST["Lng"];

                      $data = array($post_Name,$post_Content,$post_Phone,$post_Add,$post_Photo,$post_Lat,$post_Lng,$post_ID);
                      $sql_status = sqlEdit("UPDATE view SET `A_Name` = ?,`A_Content` = ?,`A_Tel` = ?,`A_Add` = ?,`Picture` = ? ,`Lat` = ? ,`Lng` = ? WHERE A_ID = ?",$data);
                      $data1 = array($post_Name,$post_Content,$post_Phone,$post_Add,$post_Photo,$post_Lat,$post_Lng,$post_ID);
                      $sql_status1 = sqlEdit("UPDATE attractions SET `A_Name` = ?,`A_Content` = ?,`A_Tel` = ?,`A_Add` = ?,`Picture` = ? ,`Lat` = ? ,`Lng` = ? WHERE A_ID = ?",$data1); 
                  
                      echo "<script>";
                      echo "alert('更新成功')";
                      echo "</script>";
                      echo "<script>";
                      echo "document.location.href='view.php';";
                      echo "</script>";
                    }
                  ?>
                  <form action="" method="post" name="formAdd" id="formAdd">
                  <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <tbody>
<tr>
<th>編號</th>
<td><input type="text" name="ID" readonly="readonly" value= "<?php echo $ID;?>" size = "33"> </td>
</tr>
<tr>
<th>景點名稱</th>
<td width = "800" height="50"><input type="text" name="Name" value= "<?php echo $Name;?>" size = "33"></td>
</tr>
<tr>
<th>圖片網址</th>
<td width = "800" height="50"><input type="text" name="Photo" value= "<?php echo $Photo;?>" size = "33"></td>
</tr>
<tr>
<th>景點電話</th>
<td width = "800" height="50"><input type="text" name="Phone" value= "<?php echo $Phone;?>" size = "33"></td>
</tr>
<tr>
<th>景點地址</th>
<td width = "800" height="50"><input type="text" name="Add" value= "<?php echo $Add;?>" size = "33"></td>
</tr>
<tr>
<th>景點介紹</th>
<td width = "800" height="450"><textarea size="300" style='width:250px ;height:400px' type="text" name="Content"><?php echo $Content;?></textarea></td>
</tr>
<tr>
<th>經度</th>
<td width = "800" height="50"><input type="text" name="Lat" value= "<?php echo $Lat;?>" size = "33"></td>
</tr>
<tr>
<th>緯度</th>
<td width = "800" height="50"><input type="text" name="Lng" value= "<?php echo $Lng;?>" size = "33"></td>
</tr>
                    </tbody>
                  </table>
                  <tr><input type="hidden" name="login" value="go"></tr>
<tr><input type="submit" name="accept" id="accept" value="確認"></tr>
                  </form>
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
