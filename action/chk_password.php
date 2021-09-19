<?php
	session_start();
	$con=mysql_connect('localhost','root','root')or die("connection not established......");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found.....");
		
		if(isset($_POST['submit']))
		{
				echo $o=$_POST['o'];
				echo $n=$_POST['n'];
				echo $c=$_POST['c'];
				echo  $q="select * from usertb where u_id=".$_SESSION['u_id']."&& a_u_status=".(0);
				echo  $res=mysql_query($q,$con);
				echo $row=mysql_fetch_array($res);
				echo  $data_pwd=$row['upwd'];
				if($data_pwd==$o)
				{
					if($n==$c)
					{
						echo $q="update usertb set upwd='$n',ucpwd='$c'where u_id=".$_SESSION['u_id'];
						echo $res=mysql_query($q,$con);	
						header("location:../index.php?page=home");
					}
					else
					{
						header("location:../index.php?page=chg_password&msg=2");
					}
				}
				else
				{
					header("location:../index.php?page=chg_password&msg=1");
				}				
		}		
?>
	