<?php
if($_REQUEST['msg'])
{
	if($_REQUEST['msg']==1)
	{
		echo "<h1>INCORRECT USERNAME</h1>";
	}
}
?>
<html>
<head>
	<title>forget password</title>
	
</head>
<body>

	<form  action="action/forget_usernm.php" method="POST">
	<div class="login-box">
<div class="left-box">
<h1>USERNAME</h1>
	<input type="text" name="unm" placeholder="username"required />

	<input class="button" type="submit" value="NEXT">
	<input class="button" type="reset" value="CLEAR">
	</div>
</div>
</form>
</body>
</html>
