
<!-- Copyright 2020 Andrei Cerci -->
<!-- Created on 2 April 2020 -->
<!-- Blue sky home page Brew Crew -->
<!-- All logos and drawings were drawn using Microsoft Word and Paint 3D and are subject to Copyright-->
<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Brew Bible</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Shrikhand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="compareStyle.css">
	<link rel="icon" type="img/png" href="Logo.png">
	<style>
		body {
			background-color: black;
			font-family: 'Shrikhand', cursive;
			font-size: 1vw;	
		}
		table {
			
			width: 100%;
			background-color: black;
			color: yellow;
			text-align: center;
			font-family: 'Shrikhand', cursive;
			font-size: 1.5vw;	
		}
		
		
		th, td {
			border: 1px solid black;
			margin: auto;
			padding-top: 25px;
			padding-bottom: 25px;
		}
	</style>
</head>
<body>

	<div id="title" class="container-fluid" >
		<a href="HomePage.html"><h1 id="name">Brew Bible</h1></a>
	</div>
	
	<div id="pages">
		<div class="column">
			<!-- need to include php file soon will run data base on ceclnx in mysql -->
			<form style="background-color: black; color: white; padding: 25px;" action="" method="post"> 
				<!-- beer 1 -->
				<label>Brand</label>
				<textarea class="form-control" id="seach_1" rows="1" cols="30" name="brand"></textarea>
				<button type="submit" style="margin-top: 10px;" name="fb">Filter by Brand</button>
				<br>
				<label>Name</label>                                            
				<textarea class="form-control" id="seach_1" rows="1" cols="30" name="name"></textarea>
				<button type="submit" style="margin-top: 10px;" name="fn">Filter by Name</button>
				<br>
				<label>Country</label>                                         
				<textarea class="form-control" id="seach_1" rows="1" cols="30" name="country"></textarea>
				<button type="submit" style="margin-top: 10px;" name="fc">Filter by Country</button>
				<br>
				<label>Type</label>                                            
				<textarea class="form-control" id="seach_1" rows="1" cols="30" name="type"></textarea>
				<button type="submit" style="margin-top: 10px;" name="ft">Filter by Type</button>
				<button type="submit" style="margin-top: 10px;" name="all">See All</button>
			</form>
		</div>
	</div>
	
	<div id="results" class="row" style="width: 100%; margin:auto;">
		<?php
			echo "<table>
				<tr><th>Brand</th><th>Name</th><th>Country</th><th>Type</th><th>Price</th><th>Calories</th><th>Percent</th></tr>";
	
			$brand = $_POST["brand"];
			$name = $_POST["name"];
			$country = $_POST["country"];
			$type = $_POST["type"];
			$price = $_POST["price"];
			$cal = $_POST["cal"];
			$percent = $_POST["percent"];

			$host = "localhost";
			$user = "brewcrew";
			$pass = "ph0ne$@#G";
	
	
			@$mysqli = new mysqli($host, $user, $pass, "brewcrew_s20");
	
			if($mysqli->connect_error) {
				die("Connection Failed " . $conn->connect_error);
			}
			
			if(isset($_POST["fb"])) {
				
				$sql = "SELECT * FROM beers WHERE brand LIKE '" . $brand . "%'";
				$result = $mysqli->query($sql);
			
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["brand"] . "\t</td><td>" . $row["name"] . "\t</td><td>" . $row["country"] . 
							"\t</td><td>" . $row["type"] . "\t</td><td>" .$row["price"] . "\t</td><td>" . $row["calories"] . "\t</td><td>" . $row["alc_percent"] . "</td></tr>";
					}
				} else {
					echo "<table>
						<tr><th>Brand</th><th>Name</th><th>Country</th><th>Type</th><th>Price</th><th>Calories</th><th>Percent</th></tr>";
				}	
			}
			
			if(isset($_POST["fn"])) {
				$sql = "SELECT * FROM beers WHERE name LIKE '" . $name ."%'";
				$result = $mysqli->query($sql);
			
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["brand"] . "\t</td><td>" . $row["name"] . "\t</td><td>" . $row["country"] . 
							"\t</td><td>" . $row["type"] . "\t</td><td>" .$row["price"] . "\t</td><td>" . $row["calories"] . "\t</td><td>" . $row["alc_percent"] . "</td></tr>";
					}
				} else {
					echo "<table>
						<tr><th>Brand</th><th>Name</th><th>Country</th><th>Type</th><th>Price</th><th>Calories</th><th>Percent</th></tr>";
				}
			}
			
			
			if(isset($_POST["fc"])) {
				$sql = "SELECT * FROM beers WHERE name LIKE '" . $country ."%'";
				$result = $mysqli->query($sql);
			
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["brand"] . "\t</td><td>" . $row["name"] . "\t</td><td>" . $row["country"] . 
							"\t</td><td>" . $row["type"] . "\t</td><td>" .$row["price"] . "\t</td><td>" . $row["calories"] . "\t</td><td>" . $row["alc_percent"] . "</td></tr>";
					}
				} else {
					echo "<table>
						<tr><th>Brand</th><th>Name</th><th>Country</th><th>Type</th><th>Price</th><th>Calories</th><th>Percent</th></tr>";
				}
			}
			
			if(isset($_POST["ft"])) {
				$sql = "SELECT * FROM beers WHERE name LIKE '" . $type ."%'";
				$result = $mysqli->query($sql);
			
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["brand"] . "\t</td><td>" . $row["name"] . "\t</td><td>" . $row["country"] . 
							"\t</td><td>" . $row["type"] . "\t</td><td>" .$row["price"] . "\t</td><td>" . $row["calories"] . "\t</td><td>" . $row["alc_percent"] . "</td></tr>";
					}
				} else {
					echo "<table>
						<tr><th>Brand</th><th>Name</th><th>Country</th><th>Type</th><th>Price</th><th>Calories</th><th>Percent</th></tr>";
				}
			}
			
			if(isset($_POST["all"])) {
				$sql = "SELECT * FROM beers";
				$result = $mysqli->query($sql);
			
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["brand"] . "\t</td><td>" . $row["name"] . "\t</td><td>" . $row["country"] . 
							"\t</td><td>" . $row["type"] . "\t</td><td>" .$row["price"] . "\t</td><td>" . $row["calories"] . "\t</td><td>" . $row["alc_percent"] . "</td></tr>";
					}
				} else {
					echo "<table>
						<tr><th>Brand</th><th>Name</th><th>Country</th><th>Type</th><th>Price</th><th>Calories</th><th>Percent</th></tr>";
				}
			}
			
		?>
		
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	
</body>
</html>