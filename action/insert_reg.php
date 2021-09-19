<?php
	session_start();
	$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
	$ufnm=$_REQUEST['ufnm'];
	$unm=$_REQUEST['unm'];
	$ueid=$_REQUEST['ueid'];
	$upwd=$_REQUEST['upwd'];
	$ucpwd=$_REQUEST['ucpwd'];
	$sec_qus=$_REQUEST['sec_qus'];
	$sec_ans=$_REQUEST['sec_ans'];
	if($upwd==$ucpwd)
	{
		$ins="insert into usertb(ufnm,unm,ueid,upwd,ucpwd,sec_qus,sec_ans,a_u_status) values('$ufnm','$unm','$ueid','$upwd','$ucpwd','$sec_qus','$sec_ans','0')";
		$res=mysql_query($ins,$con);
		if($res)
		{
			header("location:../index.php?page=login");
		}
		else
		{
			echo "not inserted";
			mysql_error();
		}
	}
	else
	{
		header("location:../index.php?page=register&msg=1");
	}
?>
