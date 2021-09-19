<?php
	$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
		
		//delete
		if(isset($_GET['del']))
		{
			echo $b_id=$_GET['del'];
			echo $del="delete from bookingtb where b_id=$b_id";
			echo mysql_query($del,$con);
			header('location:../index.php?page=managebook');
		}			
		$s="select * from bookingtb";
		$results=mysql_query($s,$con);
?>