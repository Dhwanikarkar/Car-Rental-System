<?php
if($_REQUEST['msg'])
{
	if($_REQUEST['msg']==1)
	{
		echo "<h1>INCORRECT CURRENT PASSWORD</h1>";
	}
	if($_REQUEST['msg']==2)
	{
		echo "<h1>NEW & CONFIRM PASSWORD DOESN'T MATCH</h1>";
	}
}
?>
<html>
<head><title>change password</title>
</head>
<body>
<form action="action/chk_password.php" method="post">
<div class="pwd-box">
<div class="left-box">
<h1>CHANGE PASSWORD</h1>
<input type="password" name="o" placeholder="current password" required pattern="[a-z A-Z 0-9]{4,6}" />
<input type="password" name="n" placeholder="new password" required  pattern="[a-z A-Z 0-9]{4,6}"/>
<input type="password" name="c" placeholder="confirm password" required  pattern="[a-z A-Z 0-9]{4,6}" />
<input type="submit" name="submit" value="SUBMIT" />
<input type="reset" name="clear" value="CLEAR"  />
</div>
</div>
</form>
</body>
</html>