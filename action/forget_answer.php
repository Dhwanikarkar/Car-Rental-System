<?php
	$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
	
	echo $sec_ans=$_REQUEST['sec_ans'];
	echo $u_id=$_REQUEST['u_id'];
	$que="select * from usertb where u_id='$u_id'";
	$res=mysql_query($que,$con);
	$row=mysql_fetch_array($res);
	$sec_ans=$row['sec_ans'];
	 
	if($_REQUEST['sec_ans']==$row['sec_ans'])
	{
		header("location:../index.php?page=forgetpass&u_id=$u_id");
	}
	else
	{
		header("location:../index.php?page=forgetans&u_id=$u_id&msg=1");
	}
?>