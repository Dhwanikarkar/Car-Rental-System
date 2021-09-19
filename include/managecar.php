<?php 
	include('action/crudcar.php');
	if (isset($_GET['edit']))
	{		
		$c_id = $_GET['edit'];	
		$update= true;
		$record = mysql_query("SELECT * FROM cartb WHERE c_id=$c_id",$con);
		if ($record) 
		{
			$n = mysql_fetch_array($record);
			$c_type = $n['c_type'];
			$v_nm = $n['v_nm'];
			$v_img = $n['v_img'];						
			$v_fueltype = $n['v_fueltype'];						
			$v_seats = $n['v_seats'];						
			$v_rent = $n['v_rent'];						
			$v_status = $n['v_status'];						
			$v_trans = $n['v_trans'];						
			$qty = $n['qty'];						
		}		
	}
?>
<html>
	<head>
		<title>manage car</title>
	</head>
	<body>
		<form method="POST" action="action/crudcar.php" enctype="multipart/form-data">
			<h1>MANAGE CARS</h1>
			<div class="managebox">
				<div class="left-box">
					<input type="hidden" name="c_id" value="<?php  echo $c_id; ?>">
					<input type="text" name="c_type" value="<?php  if($update==true) {echo $c_type;} ?>" placeholder="category"   />
					<input type="text" name="v_nm" value="<?php  if($update==true) {echo $v_nm;} ?>" placeholder="car name"   />
					<input type="file" name="v_img" value="<?php  if($update==true) {echo $v_img;} ?>" />
					<input type="text" name="v_fueltype" value="<?php  if($update==true) {echo $v_fueltype;} ?>" placeholder="fuel type"  />
					<input type="text" name="v_seats" value="<?php  if($update==true) {echo $v_seats;} ?>" placeholder="seats"  />
					<input type="text" name="v_rent" value="<?php if($update==true) {echo $v_rent;} ?>" placeholder="rent"  />
					<input type="text" name="v_status" value="<?php if($update==true) {echo $v_status;} ?>" placeholder="status"  />
					<input type="text" name="v_trans" value="<?php if($update==true) {echo $v_status;} ?>" placeholder="transmission"  />
					<input type="text" name="qty" value="<?php  if($update==true) {echo $qty;} ?>" placeholder="quantity"  />
				<?php 
					if($update==false):
				?>
				<input type="submit" name="save" value="SAVE">
				<?php
					else:
				?>
				<input type="submit" name="up" value="UPDATE">
				<?php endif ?>
				</div>
			</div>			
		</form>
		<?php
			$s="select * from cartb";
			$results=mysql_query($s,$con);
		?>
		<table>			
				<tr>
					<th>category</th>					
					<th>car name</th>					
					<th>image</th>
					<th>fuel type</th>
					<th>seats</th>
					<th>rent</th>
					<th>status</th>
					<th>transmission</th>
					<th>quantity</th>
					<th colspan="2">action</th>
				</tr>
				<?php
					while($row=mysql_fetch_array($results))
					{
				?>
				<tr>
					<td><?php echo $row['c_type']; ?></td>					
					<td><?php echo $row['v_nm']; ?></td>									
					<td><?php echo "<img src='upload/".$row['v_img']."' width=50px >"; ?></td>															
					<td><?php echo $row['v_fueltype']; ?></td>
					<td><?php echo $row['v_seats']; ?></td>
					<td><?php echo $row['v_rent']; ?></td>
					<td><?php echo $row['v_status']; ?></td>
					<td><?php echo $row['v_trans']; ?></td>
					<td><?php echo $row['qty']; ?></td>
					<td><a href="index.php?page=managecar&edit=<?php echo $row['c_id']; ?>" class="button" >edit</a></td>
					<td><a href="action/crudcar.php?del=<?php echo $row['c_id']; ?>" class="button" >delete</a></td>					
				</tr>
				<?php
					}
				?>		
		</table>
	</body>
</html>
