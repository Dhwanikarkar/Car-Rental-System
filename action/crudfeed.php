<?php
	
	$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
		
		//delete
		if(isset($_GET['del']))
		{
			echo $feed_id=$_GET['del'];
			echo $del="delete from feedbacktb where feed_id=$feed_id";
			echo mysql_query($del,$con);
			header('location:../index.php?page=managefeed');
		}			
		
		$s="select * from feedbacktb";
		$results=mysql_query($s,$con);
?>