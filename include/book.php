<?php
	session_start();
	$con=mysql_connect('localhost','root','root') or die("connect can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found...");
echo $c_id=$_REQUEST['c_id'];	
	
?>
<html>
	<body>
		<div class="card1"> 
			<?php
				if (isset($_GET['book']))
				{
					$c_id = $_REQUEST['book'];
					$sel = "SELECT * FROM cartb where c_id=$c_id";
					$results = mysql_query($sel,$con ); 
					while ($row = mysql_fetch_array($results)) 
					{
			?>
				<div class="photo">				
					<img src="upload/<?php echo $row['v_img'];?>" width="250px" height="189px">						
				</div>
				<div class="description">
					<h2><?php echo $row['v_nm']; ?></h2>
				</div>
					<h3 class="d2"><?php echo $row['v_seats']; echo "&nbsp;seater";?><br>
					<?php echo $row['v_trans'];  ?></h3>				
					<h3 class="d1"><?php echo $row['v_fueltype'];  ?><br>	
					<?php echo $row['v_rent'];  echo "/-"; ?></h3>									
			<?php
					}
				}
			?>
		</div>
		<form action="action/insert_pay.php" method="post">
			<div class="book-box">
				<h1>PROCEED HERE</h1><br><br><br>	
				<div class="left-box">									
				<select class="selcls" required name="city">
					<option value=''>---select---</option>             			
					<option value='Agra'>Agra</option>             			
					<option value='Ahmedabad'>Ahmedabad</option>             			
					<option value='Chandigarh'>Chandigarh</option>             			
					<option value='Chennai'>Chennai</option>             			
					<option value='Delhi'>Delhi</option>             			
					<option value='Hyderabad'>Hyderabad</option>             			
					<option value='Jaipur'>Jaipur</option>             			
					<option value='Kochi'>Kochi</option>             			
					<option value='Kolkata'>Kolkata</option>             			
					<option value='Mumbai'>Mumbai</option>             			
					<option value='Pune'>Pune</option>             			
					<option value='Surat'>Surat</option>             			
				</select> <br><br>
				<input type="date" name="fd" required />
				<input type="date" name="td" required  />					
					<textarea name="start_pos" row="4"  placeholder="your location" required ></textarea>
					<textarea name="end_pos" row="4"  placeholder="destination" required ></textarea>
					<input type="hidden" name="c_id" value="<?php  echo $c_id; ?>">									
					<input type="submit" name="pay" value="proceed" /><br>
				</div>
			</div>
		</form>
	</body>
</html>