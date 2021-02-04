<?php
	session_start();
?>
<html>
	<head>
		<title>
			Admin Home
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/railogo.png"/> 
		<h1 id="title" style="color: navy;">
			IRCTC
		</h1>
		<div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<fieldset style="margin: 50px;">
		<legend><h2>Welcome Admin <i class="fa fa-address-card"></i></h2></legend>
		<table cellpadding="5">
			
			<tr>
				<td class="admin_func"><a href="admin_view_booked_tickets.php"><h3> <i class="fa fa-train" aria-hidden="true"></i> View List of Booked Tickets</h3></a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="add_flight_details.php"><h3> <i class="fa fa-train" aria-hidden="true"></i> Add Train Schedule Details</h3></a>
				</td>
			</tr>

		</table>
		</fieldset>
	</body>
</html>