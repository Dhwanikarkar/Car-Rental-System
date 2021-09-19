<?php
	session_start();
	$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
	
	$feed_msg=$_REQUEST['feed_msg'];
	$ins="insert into feedbacktb(feed_msg,u_id) values('$feed_msg',".$_SESSION['u_id'].")";
	mysql_query($ins,$con);
	header("location:../index.php?page=home");	
?>
