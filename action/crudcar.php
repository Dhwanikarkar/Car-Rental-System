<?php
	
	$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
		$c_id=0;
		$v_nm="";
		$v_img="";
		$v_fueltype="";
		$v_seats="";
		$v_rent="";
		$v_status="";
		$v_trans="";
		$qty="";
		$c_type="";
	
	
		//insert
		if(isset($_POST['save']))
		 {
			move_uploaded_file($_FILES["v_img"]["tmp_name"],"../upload/".$_FILES["v_img"]["name"]);
			$v_nm=$_REQUEST['v_nm'];
			echo $image=$_FILES['v_img']['name'];
			$v_fueltype=$_REQUEST['v_fueltype'];
			$v_seats=$_REQUEST['v_seats'];
			$v_rent=$_REQUEST['v_rent'];
			$v_status=$_REQUEST['v_status'];
			$v_trans=$_REQUEST['v_trans'];
			$qty=$_REQUEST['qty'];
			$c_type=$_REQUEST['c_type'];
			$ins="insert into cartb(v_nm,v_img,v_fueltype,v_seats,v_rent,v_status,v_trans,qty,c_type) values('$v_nm','$image','$v_fueltype','$v_seats','$v_rent','$v_status','$v_trans','$qty','$c_type')";
			$res=mysql_query($ins,$con);
			header("location:../index.php?page=managecar");
		}
		
		//update
		if(isset($_POST['up']))
		 {
			$c_id=$_POST['c_id'];			
			$v_nm=$_REQUEST['v_nm'];
			move_uploaded_file($_FILES["v_img"]["tmp_name"],"../upload/".$_FILES["v_img"]["name"]);
			$image=$_FILES['v_img']['name'];
			$v_fueltype=$_REQUEST['v_fueltype'];
			$v_seats=$_REQUEST['v_seats'];
			$v_rent=$_REQUEST['v_rent'];
			$v_status=$_REQUEST['v_status'];
			$v_trans=$_REQUEST['v_trans'];
			$qty=$_REQUEST['qty'];
			$c_type=$_POST['c_type'];
			$upd="update cartb set v_nm='$v_nm',v_img='$image',v_fueltype='$v_fueltype',v_seats='$v_seats',v_rent='$v_rent',v_status='$v_status',v_trans='$v_trans',qty='$qty',c_type='$c_type' where c_id=$c_id";			
			mysql_query($upd,$con);			
			header('location:../index.php?page=managecar');
		 }
		 
		 
		//delete
		if(isset($_GET['del']))
		{
			echo $c_id=$_GET['del'];
			echo $del="delete from cartb where c_id=$c_id";
			echo mysql_query($del,$con);
			header('location:../index.php?page=managecar');
		}	

		
		//select
		$s="select * from cartb";
		$results=mysql_query($s,$con);
?>