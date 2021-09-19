<?php
	
	$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
		
		//delete
		if(isset($_GET['del']))
		 {
			echo $u_id=$_GET['del'];
			echo $del="delete from usertb where u_id=$u_id";
			echo mysql_query($del,$con);
			header('location:../index.php?page=manageuser');
		 }			
		
		$s="select * from usertb where a_u_status='0'";
		$results=mysql_query($s,$con);
?>