<?php
	session_start();
	$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
	$c_id=$_REQUEST['c_id'];
	$sel = "SELECT * FROM cartb where c_id=".$c_id;
	$results = mysql_query($sel,$con ); 
	while ($row = mysql_fetch_array($results)) 
	{
		$v_rent=$row['v_rent'];
	}
	$city=$_REQUEST['city'];
	$cd=$_REQUEST['td'];
	$od=$_REQUEST['fd'];
	function datediff($cd,$od)
	{
		$ind=strtotime($cd);
		$ond=strtotime($od);
		$diff=$ind-$ond;
		return round($diff/86400);
	}
	$diff=datediff($cd,$od);
		
	$start_pos=$_REQUEST['start_pos'];
	$end_pos=$_REQUEST['end_pos'];
	$total=$diff*$v_rent+200;
	$total;
		
	$ins="insert into bookingtb(city,fd,td,start_pos,end_pos,total,c_id,u_id)values('$city','$cd','$od','$start_pos','$end_pos','$total',".$_REQUEST['c_id'].",".$_SESSION['u_id'].")";
	$q=mysql_query($ins,$con);
	if($q)
	{
		header("location:../index.php?page=pay&c_id=$c_id&total=$total");
	}
	else
	{
		header("location:../index.php?page=home");
	}	
?>
