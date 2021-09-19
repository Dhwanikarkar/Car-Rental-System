<?php
	session_start();
	$con=mysql_connect('localhost','root','root') or die("connect can't establish...");
	mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found...");
	$c_id=$_REQUEST['c_id'];	
 $total=$_REQUEST['total'];	
?>

 <html>
 <head>
 <body>
	<div class="imp">
		<br><br><h1>IMPORTENT POINTS TO REMEMBER</h1>
		<div class="faredl">TOLLS, PARKING & INTER-STATE TAXES:</div><br>	<div class="faredi">TO BE PAID BY YOU</div> <br><br><br>
		<div class="faredl">ID VERIFICATION:</div><br>	<div class="faredi">PLEASE KEEP YOUR ORIGINAL DRIVING LICENSE HANDY.<br>THIS VERIFICATION IS MANDATORY.</div> <br><br><br>
		<div class="faredl">PRE-HANDOVER INSPECTION:</div><br>	<div class="faredi">PLEASE INSPECT THE CAR (INCLUDING THE FUEL GAUGE AND ODOMETER)<br>THOROUGHLY BEFORE APPROVING THE CHECKLIST.</div> <br><br><br>
	</div>
	<div class="fared-box">
		<div class="left-box">
		<br><h1>FARE DETAILS</h1>
		<?php
					
					$sel = "SELECT * FROM cartb where c_id=$c_id";
					$results = mysql_query($sel,$con ); 
					while ($row = mysql_fetch_array($results)) 
					{
		?>
			<div class="fared">BASE FAIR</div> <div class="faredr"><?php echo $row['v_rent'];  echo "/-"; ?></div><br><br><br>			
			<div class="fared">DOOR STEP DELIVERY/PICKUP</div> <div class="faredr"><?php echo "200";  echo "/-"; ?></div><br><br><br>
			<div class="fared">INSURENCE/GST</div> <div class="faredr"><?php echo "Included"; ?></div><br><br>
			
		<?php
					}
				
		?>
		<div class="fared"><h2>TOTAL</h2></div> <div class="faredt"><h2><?php echo $_REQUEST['total'];  echo "/-"; ?></h2></div><br><br><br><br><br>
		<form method="POST" action="index.php?page=home">
			<input type="submit" name="over" value="cash" /><br>
		</form>
		</div>
		
		
	</div>
 </body>
 </head>
 </html>