<?php
if($_REQUEST['msg'])
{
	if($_REQUEST['msg']==1)
	{
		echo "<h1>INCORRECT USERNAME OR PASSWORD</h1>";
	}
}
?>
<html>
<head>
<title> 
login form
</title>
</head>
<body>
<form action="action/check_login.php" method="POST">	
<div class="login-box">
	<div class="left-box">
		<h1>SIGN IN</h1>
		<input type="text" name="unm"placeholder="username" required  />
		<input type="password" name="upwd"placeholder="password" pattern="[a-z A-Z 0-9]{4,6}"  required />
		<input type="submit" name="loginbtn" value="SIGN IN" /><br>
		<a href="index.php?page=forgetuser">FORGOT PASSWORD</a><br><span>
		<a href="index.php?page=register">DON'T HAVE AN ACCOUNT</a><br>
	</div>
</div>
</form>
</body>
</html>