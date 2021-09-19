<?php
	include('action/cruduser.php');	
?>
<html>
	<head>
		<title>manage user</title>
	</head>
	<body>
		<form method="POST" action="action/cruduser.php">
		<h1>MANAGE USERS</h1>
		<div class="managebox">
			<div class="left-box">
				<input type="hidden" name="u_id" value="<?php echo $u_id; ?>">		
			</div>
		</div>
		</form>
		<?php
			$s="select * from usertb where a_u_status='0'";
			$results=mysql_query($s,$con);
		?>
		<table class="mu">	
			<thead>		
				<tr>					
					<th>full name</th>
					<th>user name</th>
					<th>email id</th>
					<th>password</th>
					<th>confirm password</th>
					<th>question</th>
					<th>answer</th>
					
					<th colspan="2">action</th>
				</tr>
				</thead>
				<?php
					while($row=mysql_fetch_array($results))
					{
				?>
				<tr>
					<td><?php echo $row['ufnm']; ?></td>
					<td><?php echo $row['unm']; ?></td>
					<td><?php echo $row['ueid']; ?></td>
					<td><?php echo $row['upwd']; ?></td>
					<td><?php echo $row['ucpwd']; ?></td>
					<td><?php echo $row['sec_qus']; ?></td>
					<td><?php echo $row['sec_ans']; ?></td>
					<td><a href="action/cruduser.php?del=<?php echo $row['u_id']; ?>" class="button" >delete</a></td>
					
				</tr>
				<?php
					}
				?>		
		</table>	
	</body>
</html>
