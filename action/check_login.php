<?php
	session_start();
	$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
	
	$unm=$_REQUEST['unm'];
	$upwd=$_REQUEST['upwd'];
	
	$sel="select * from usertb where unm='$unm' && upwd='$upwd'";
	$res=mysql_query($sel,$con);	
	if($row=mysql_fetch_array($res))
	{
		$_SESSION['unm']=$row['unm'];						
		$_SESSION['upwd']=$row['upwd'];
		$_SESSION['u_id']=$row['u_id'];
		$_SESSION['a_u_status']=$row['a_u_status'];
		header("location:../index.php?page=home&msg=0");
	}
	else
	{
		header("location:../index.php?page=login&msg=1");
	}	
?>
