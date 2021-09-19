<?php
	$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
	
	echo $u_id=$_REQUEST['u_id'];
	echo $npwd=$_REQUEST['npwd'];
	echo $ncpwd=$_REQUEST['ncpwd'];
	if($npwd==$ncpwd)
	{
		echo $que="update usertb set upwd='$npwd',ucpwd='$ncpwd' where u_id=$u_id";
		echo $res=mysql_query($que,$con);
		if($res)
		{	
			echo "pass";
			header("location:../index.php?page=login");
		}
	}
	else
	{
		header("location:../index.php?page=forgetpass&u_id=$u_id&msg=1");
	} 
 ?>