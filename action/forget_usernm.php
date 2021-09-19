<?php
	session_start();
	$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
	
	$runm=$_REQUEST['unm'];
	if(isset($runm))
	{
		$que="select * from usertb where unm='$runm'";
		$res=mysql_query($que,$con);
	
		if($row=mysql_fetch_array($res))
		{
			$runm=$_REQUEST['unm'];
			$u_id=$row['u_id'];	
			header("location:../index.php?page=forgetans&u_id=$u_id");						
		}
		else
		{
			header("location:../index.php?page=forgetuser&msg=1");
		}
	}
?>