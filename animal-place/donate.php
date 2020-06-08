<!DOCTYPE html>
<html lang="en">
<head>
<title>The Animal Place</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<!-- Created by Mark Baber -->

<!-- This is the CSS -->
<link rel="stylesheet" type="text/css" href="donate.css"/>
</head>

	<body>
		<div class="header">
			<h1>The Animal Place</h1>
			<p>We are a specialist exotic animal shelter, who rescue mistreated exotic animals.</p>
		</div>

<!-- Navigation & Links -->

	<div class="topnav">
		<a href="index.htm">Home</a>
		<a href="about.htm">About</a>
		<a href="photos.htm">Photos</a>
		<a href="contact.htm">Contact</a>
		<a href="donate.php">Donate</a>
	</div>

    <!-- Contact Form Start -->
	<div class="row">
		<div class="column">
			<h1>DONATE</h1>
			<div class="para">
				<h2>Here at The Animal Place,<br>we take pride in the work that all of us here do, from our part-time staff, vets, volunteers and all of our animals.
				</h2>
				
				<h3>We usually take donations at the Zoos entrance and scattered around the zoo, we are also accepting one-off donations which you can find out more by <a href="contact.htm">contacting</a> us. We are currently working on an 'Adopt an Animal' where you can pay a monthly fee for a particular animal. You will also receive a bi-monthly newsletter about the adopted animal and invitations to any special events. 
				
				<br> <br> 
				We are also starting up a 'Keeper for a day' program, where anyone from the ages 14+ can see what it's like to work at a zoo for a day, with the help of one of our more experienced staff members. Get close and personal with your favourite animals, feeding them and see what it's like to look after them.
				</h3>
					
			</div>
					
			<!-- Start of php code-->
			<!-- Connecting to DB -->
			<?php
				include("dbinfo.inc.php");
				$conn = mysqli_connect($servername, $username, $password, $database);

				// Check connection
				if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
				echo "Here are the most recent animals which have been entered into our database"; 
			?> 

			<div class=h1>The Newest Animals</div>
			<?php 
				$sql="SELECT * FROM `animals` where animalLocation = 'Cilfynydd' ORDER BY animalID ASC ";
				$result = $conn->query($sql);
			?>

			<table class="Cilfynydd">
				<caption><strong>Cilfynydd</strong></caption>
				<thead>
					<tr>
							<td><strong>ID</strong></td>
							<td><strong>Title</strong></td>
							<td><strong>Type</strong></td>
							<td><strong>Location</strong></td>
					</tr>
				</thead>

				<tbody>
					<?php
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
				
							echo ("<tr>\n");
							echo ("<td>".$row["animalID"]."</td>");
							echo ("<td>".$row["animalName"]."</td>");
							echo ("<td>".$row["animalType"]."</td>");
							echo ("<td>".$row["animalLocation"]."</td>");
							echo ("</tr>\n");

								}
						} else {
								echo "0 results";
						}
						?>
			
				</tbody>
			</table>
				<?php 
				$sql="SELECT * FROM `animals` where animalLocation = 'Cardiff' ORDER BY animalID ASC ";
				$result = $conn->query($sql);
			?>

			<table class="Cardiff">
				<caption><strong>Cardiff</strong></caption>
				<thead>
					<tr>
							<td><strong>ID</strong></td>
							<td><strong>Title</strong></td>
							<td><strong>Type</strong></td>
							<td><strong>Location</strong></td>
					</tr>
				</thead>

				<tbody>
					<?php
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
				
							echo ("<tr>\n");
							echo ("<td>".$row["animalID"]."</td>");
							echo ("<td>".$row["animalName"]."</td>");
							echo ("<td>".$row["animalType"]."</td>");
							echo ("<td>".$row["animalLocation"]."</td>");
							echo ("</tr>\n");

								}
						} else {
								echo "0 results";
						}
						?>
			
				</tbody>
			</table>
				<?php 
				$sql="SELECT * FROM `animals` where animalLocation = 'Trefforest' ORDER BY animalID ASC ";
				$result = $conn->query($sql);
			?>

			<table class="Trefforest">
				<caption><strong>Trefforest</strong></caption>
				<thead>
					<tr>
							<td><strong>ID</strong></td>
							<td><strong>Title</strong></td>
							<td><strong>Type</strong></td>
							<td><strong>Location</strong></td>
					</tr>
				</thead>

				<tbody>
					<?php
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
				
							echo ("<tr>\n");
							echo ("<td>".$row["animalID"]."</td>");
							echo ("<td>".$row["animalName"]."</td>");
							echo ("<td>".$row["animalType"]."</td>");
							echo ("<td>".$row["animalLocation"]."</td>");
							echo ("</tr>\n");

								}
						} else {
								echo "0 results";
						}
						$conn->close(); 
						?>
			
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
