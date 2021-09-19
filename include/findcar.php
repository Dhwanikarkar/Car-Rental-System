<?php
	
	$con=mysql_connect('localhost','root','root') or die("connect can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found...");
	
?>
<html>
	<head>		
	</head>
	</body>
		
			<div class="cat-table">
				<br><h1>FIND YOUR CAR</h1>
				<form action="" method="post">
				<select class="selcls" name="c_type" required>
				<?php
					$q="select DISTINCT(c_type)from cartb order by c_type";
					$res=mysql_query($q,$con);
					echo "<option value=''>---select---</option>";
					while($rows=mysql_fetch_array($res))
					{
						$c_type=$rows['c_type'];
						echo "<option value='$c_type'>$c_type</option>";
					}
				?>
				</select><br><br>
				<input type="submit" name="submit" value="SEARCH CAR" />
				</form>
			</div>
			<div class="dis">
				<br><h1>CAR LISTING</h1>
				<?php
						if (!isset($_REQUEST['submit']))
						{
							$sel = "SELECT * FROM cartb";
							$results = mysql_query($sel,$con );
							if(mysql_num_rows($results)>0)
							
							{
							while ($rows= mysql_fetch_array($results)) 
							{
								$v_nm=$rows['v_nm'];
								$v_seats=$rows['v_seats'];
								$v_trans=$rows['v_trans'];
								$v_fueltype=$rows['v_fueltype'];
								$v_rent=$rows['v_rent'];
				?>
								<div class="card"> 					
									<div class="photo">
										<img src="upload/<?php echo $rows['v_img'];?>" width="250px" height="189px">						
									</div>
									<div class="description">
										<h2><?php echo $rows['v_nm']; ?></h2>
										<h3><?php echo $rows['v_seats']; echo "&nbsp;seater"; ?></h3>
										<h3><?php echo $rows['v_trans']; ?></h3>
										<h3><?php echo $rows['v_fueltype']; ?></h3>
										<h3><?php echo $rows['v_rent']; echo "/-"; ?></h3><br><br><br>				
									</div>
									<form method="POST">
										<a href="index.php?page=book&book=<?php echo $rows['c_id']; ?>" class="button">book now</a>
									</form>
								</div>
				<?php
							}	
						}
					}
					else
					{
						$c_type=$_POST['c_type'];
						if($c_type!="")
						{
							$sel = "SELECT * FROM cartb where c_type='$c_type'";
							$results = mysql_query($sel,$con );
														if(mysql_num_rows($results)>0)
							
							{
							while ($rows= mysql_fetch_array($results)) 
							{
								$v_nm=$rows['v_nm'];
								$v_seats=$rows['v_seats'];
								$v_trans=$rows['v_trans'];
								$v_fueltype=$rows['v_fueltype'];
								$v_rent=$rows['v_rent'];
				?>
								<div class="card"> 					
									<div class="photo">
										<img src="upload/<?php echo $rows['v_img'];?>" width="250px" height="189px">						
									</div>
									<div class="description">
										<h2><?php echo $rows['v_nm']; ?></h2>
										<h3><?php echo $rows['v_seats']; echo "&nbsp;seater"; ?></h3>
										<h3><?php echo $rows['v_trans']; ?></h3>
										<h3><?php echo $rows['v_fueltype']; ?></h3>
										<h3><?php echo $rows['v_rent']; echo "/-"; ?></h3><br><br><br>				
									</div>
									<form method="POST">
										<a href="index.php?page=book&book=<?php echo $rows['c_id']; ?>" class="button">book now</a>
									</form>
								</div>
				<?php
							}	
						}
					else
					{							
				?>
				<h3>not found</h3>
				<?php
							}
						}
					}
				?>
			</div>	

	</body>
</html>