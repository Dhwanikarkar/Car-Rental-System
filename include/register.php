<?php
if($_REQUEST['msg'])
{
	if($_REQUEST['msg']==1)
	{
		echo "<h1>PASSWORDS DOESN'T MATCH</h1>";
	}
}
?>

<html>
<head>
<title> sign up</title>
</head>
<body>
<form action="action/insert_reg.php" method="POST">	
	<div class="signup-box">
		<div class="left-box">
			<h1>SIGN UP</h1>
			<input type="text" name="ufnm" placeholder="fullname" required />
			<input type="text" name="unm" placeholder="username" required />
			<input type="email" name="ueid" placeholder="email" required  />
			<input type="password" name="upwd" placeholder="password" required pattern="[a-z A-Z 0-9]{4,6}" />
			<input type="password" name="ucpwd" placeholder="confirm password" required pattern="[a-z A-Z 0-9]{4,6}" />
			<select class="selcls" requried name="sec_qus">
				<option >YOUR FAVIRITE CAR?</option>
				<option>YOUR FAVIRITE CAR COLOR?</option>
				<option >YOUR FAVIRITE CAR FEATURE?</option>
			</select>
			<input type="password" name="sec_ans" placeholder="answer" required />
			<input type="submit" name="signupbtn" value="SIGN UP" />
		</div>
		
		<div class="or">
			OR
		</div>
	</div>
</form>
<div class="right-box">
			<span class="signinwith"><h1>SIGN IN WITH</h1> <h1>SOCIAL NETWORK</h1></span>
			<button class="social facebook">LOGIN WITH FACEBOOK</button>
			<button class="social twitter">LOGIN WITH TWITTER</button>
			<button class="social google">LOGIN WITH +GOOGLE</button>
		</div>
</body>
</html>