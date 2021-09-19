<?php
if($_REQUEST['msg'])
{
	if($_REQUEST['msg']==1)
	{
		echo "<h1>NEW AND CONFIRM PASSWORD ARE NOT SAME</h1>";
	}
}
?>
<html>
<head><title>forget password</title>

</head>
<body>
		<form action="action/forget_pass.php" method="POST">
		<div class="login-box">
<div class="left-box">
<h1>PASSWORD</h1>
		<input type="hidden" name="u_id" value="<?php echo $_REQUEST['u_id'];?>">
	
	<input type="password" name="npwd" placeholder="new password" required  pattern="[a-z A-Z 0-9]{4,6}"/>
	<input type="password" name="ncpwd" placeholder="confirm password" required  pattern="[a-z A-Z 0-9]{4,6}" />



	<input class="button" type="submit" value="SUBMIT">
	<input class="button" type="reset" value="CLEAR">
	</div>
</div>
</form>
</body>
</html>

