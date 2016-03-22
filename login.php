<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KaDaChar Travel管理員登入</title>
    <link rel="shortcut icon" href="logoohho.ico">    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <h3>KaDaChar Travel</h3>
            </p>
            <p>管理員登入</p>
            <form action="" method="post" name="formAdd" id="formAdd">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="" name="ID" id="ID">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password" id="password">
                </div>
                <input type="hidden" name="action" value="login">
                <input type="submit" class="btn btn-primary block full-width m-b" name="login" id="login" value="登入">
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php
    session_start();
    require_once("./function/global_function.php");

    if (!empty($_SESSION["Staff_ID"])) {
        header("Location: home.php");
    }

    if(isset($_POST["action"])&&($_POST["action"]=="login")) {
    header("Content-Type:text/html; charset=utf-8");

    $ID = $_POST["ID"];
    $P = $_POST["password"];
    $data = sqlQry("SELECT * FROM staff WHERE Acc = ? ",array($ID));

    if (!empty($data)) {
        
        $row_data = sqlQry("SELECT * FROM staff WHERE Pwd = ? ",array($P));

        if(!empty($row_data)){

            $_SESSION["Staff_ID"] = $ID;
            $_SESSION["Staff_Password"] = $P;
            $_SESSION["Staff_Name"] = $data[0]['Name'];
            // print_r($_SESSION["Staff_ID"].' '.$_SESSION["Staff_Password"].' '.$_SESSION["Staff_Name"]);
            echo "<script>";

            echo "alert('歡迎".$data[0]['Name']."管理員')";

            echo "</script>";

            echo "<script>";

             echo "document.location.href='home.php';";

            echo "</script>";
        }
        else{
            echo "<script>";

            echo "alert('密碼錯誤，請確認輸入是否有誤！')";

            echo "</script>";
        }
    }
    

    else{

        echo "<script>";

        echo "alert('查無此帳號，請確認輸入是否有誤！')";

        echo "</script>";
        
        }


    }
?>


