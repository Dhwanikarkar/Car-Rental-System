<html>
<head>
<link href="css/hstyle.css" rel="stylesheet" type="text/css">
<link href="css/cstyle.css" rel="stylesheet" type="text/css">
<link href="css/fstyle.css" rel="stylesheet" type="text/css">
<title> car rental</title>
</head>
<body>


<!--header-->
<div class =header>
		<div class=logo>
					<img src="images/logo.png" height=190 width=240>
				</div>
<?php
$con=mysql_connect('localhost','root','root')or die("connection can't establish...");
mysql_select_db('carrentaldb',$con)or die(mysql_error()."database not found");
session_start(); 
if(isset($_SESSION['unm']))
{
	if($_SESSION['a_u_status']==0)
	{
		?>
			<ul>
				<li><a href="index.php?page=home">HOME</a></li>
				<li><a href="index.php?page=findcar">LET'S BOOK</a></li>
				<li><a href="index.php?page=aboutus">ABOUT US</a></li>
				<li><a href="index.php?page=chg_password">CHANGE PASSWORD</a></li>
				<li><a href="index.php?page=feedback">FEEDBACK</a></li>
				<li><a href="index.php?page=logout">SIGN OUT</a></li>
			</ul>
		<?php
			}
			else
			{
		?>
			<ul>
				<li><a href="index.php?page=managecar">MANAGE CARS</a></li>
				<li><a href="index.php?page=managebook">MANAGE BOOKINGS</a></li>
				<li><a href="index.php?page=manageuser">MANAGE USERS</a></li>
				<li><a href="index.php?page=managefeed">MANAGE FEEDBACK</a></li>
				<li><a href="index.php?page=logout">SIGN OUT</a></li>
			</ul>
		<?php
	}
}
else
	{
	?>
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=aboutus">ABOUT US</a></li>
			<li><a href="index.php?page=login">SIGN IN</a></li>
			<li><a href="index.php?page=register">SIGN UP</a></li>
			
		</ul> 
	<?php
	}
	?>
</div>    


<!--content-->
<div class=content>
<?php
	if(isset($_REQUEST['page']))
	{
		include "include/".$_REQUEST['page'].".php";
	}
	else
	{
		include "include/home.php";
	}
?>
</div>

<!--footer-->
<div class=footer>
	<div class=footer-content>
		<div class="footer-left">
			<h3>about<span>adrenture</span></h3><br>
			<p class="footer-links">
				<a href="index.php?page=home">home</a> |
				<a href="index.php?page=home">about us</a> |
				<a href="index.php?page=home">contact us</a> 
			</p>
			<p class="footer-company-name">&copy; 2019 adrenture car renting pvt.ltd</p>
		</div>
		<div class="footer-center">
			<p><span>309-rupa solitaire,
			bldg.NOa-1,section-1</span>
			mahpe,navi mumbai-400710</p><br>
			<p>+912778356734</p><br>
			<p><a href ="mailto:support@adrenture.com">supprot@adrenture.com</a></p>
		</div>
		<div class="footer-right">
					<p class="footer-company-about">
						<span>About the company</span>
						We offer facilites of car taking on rents with  best price
					</p><br>
					
					<a href="#"><img src="images/gp.png" height=40px width=60px></a>&nbsp;	
					<a href="#"><img src="images/pin.png" height=40px width=60px></a>&nbsp;
					<a href="#"><img src="images/fb.png" height=40px width=60px></a>&nbsp;	
					<a href="#"><img src="images/insta.png" height=40px width=60px></a>	
				</div>
	</div>
</div>
</body>
</html>