<?php
	include('action/crudbook.php');	
?>
<html>
	<head>
		<title>manage book</title>
	</head>
	<body>
		<form method="POST" action="action/crudbook.php">
		<h1>MANAGE BOOKINGS</h1>
		<div class="managebox">
			<div class="left-box">
				<input type="hidden" name="b_id" value="<?php echo $b_id; ?>">		
			</div>
		</div>
		</form>
		<?php
			$s="select * from bookingtb";
			$results=mysql_query($s,$con);
		?>
		<table class="mb">	
			<thead>		
				<tr>					
					<th>city</th>
					<th>from date</th>
					<th>to date</th>
					<th>location</th>
					<th>destination</th>
					<th>total</th>
					<th colspan="2">action</th>
				</tr>
			</thead>
			<?php
				while($row=mysql_fetch_array($results))
				{
			?>
				<tr>
					<td><?php echo $row['city']; ?></td>
					<td><?php echo $row['td']; ?></td>
					<td><?php echo $row['fd']; ?></td>
					<td><?php echo $row['start_pos']; ?></td>
					<td><?php echo $row['end_pos']; ?></td>
					<td><?php echo $row['total']; ?></td>
					<td><a href="action/crudbook.php?del=<?php echo $row['b_id']; ?>" class="button" >delete</a></td>
				</tr>
				<?php
					}
				?>		
		</table>
	</body>
</html>
