<?php
	include('action/crudfeed.php');	
?>
<html>
	<head>
		<title>manage feedback</title>
	</head>
	<body>
		<form method="POST" action="action/crudfeed.php">
		<h1>MANAGE FEEDBACKS</h1>
		<div class="managebox">
			<div class="left-box">
				<input type="hidden" name="feed_id" value="<?php echo $feed_id; ?>">
				<input type="hidden" name="u_id" value="<?php echo $u_id; ?>">		
			</div>
		</div>
		</form>
		<?php
			$s="select * from feedbacktb";
			$results=mysql_query($s,$con);
		?>
		<table class="mf">	
			<thead>		
				<tr>					
					<th>message</th>
					<th colspan="2">action</th>
				</tr>
				</thead>
				<?php
					while($row=mysql_fetch_array($results))
					{
				?>
				<tr>
					<td><?php echo $row['feed_msg']; ?></td>
					<td><a href="action/crudfeed.php?del=<?php echo $row['feed_id']; ?>" class="button">delete</a></td>
				</tr>
				<?php
					}
				?>		
		</table>
	</body>
</html>
