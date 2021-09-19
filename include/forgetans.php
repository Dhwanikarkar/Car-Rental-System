<?php
if($_REQUEST['msg'])
{
	if($_REQUEST['msg']==1)
	{
		echo "<h1>INCORRECT ANSWER</h1>";
	}
}
?>
<html>
<head><title>forget password</title>
</head>
<body>
<form="action/forget_answer.php" method="post">  
<div class="login-box">
<div class="left-box">
<h1>SECURITY ANSWER</h1>

<?php
$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
	
$u_id=$_REQUEST['u_id'];

if(isset($u_id))
{

 $que="select * from usertb where u_id='$u_id'";

$res=mysql_query($que,$con);

if($res)
{

	if($row=mysql_fetch_array($res))
	{

		$u_que=$row['sec_qus'];
		
	
	}
}
}

?>
  <form action="action/forget_answer.php" method="POST">
<input type="hidden" name="u_id" value="<?php echo $_REQUEST['u_id']; ?>"> 

	<?php	echo $u_que;?>
	
		<input type="password" name="sec_ans" placeholder="answer" required />

		<input  type="submit" name="submit" value="NEXT">
		<input  type="reset" name="clear" value="CLEAR">
</div>
</div>
</form>
</body>
</html>

