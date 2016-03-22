<html>
<head>
	<title>KaDaChar Travel－管理員登入</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h1 align="center">管理員登入</h1>
<form action="accountCheck.php" method="post" name="formAdd" id="formAdd">
<table border="0" align="center"> 
	<tr>
		<td>	帳		號    </td>
		<td><input type="text" name="ID" id="ID"></td>

	</tr>
	<tr>
		<td> 	密		碼    </td>
		<td><input type="password" name="password" id="password"></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<input type="hidden" name="action" value="login">
		<br>
		<input type="submit" name="login" id="login" value="登入">
		</td>
	</tr>
</table>
</form>
</body>
</html>