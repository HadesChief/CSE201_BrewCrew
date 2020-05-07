<!-- Copyright 2020 Andrei Cerci -->
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
	<link rel="stylesheet" type="text/css" href="portalStyle.css">
	<link rel="icon" type="img/png" href="Logo.png">
	<style>
	 	table {
			
			width: 100%;
			background-color: black;
			color: white;
			font-size: 1vw;	
		}
		
		
		th, td {
			border: 1px solid black;
			padding-top: 25px;
			padding-bottom: 25px;
		}
	</style>
</head>
<body style="background-image: url('beerBg1.jpg');">
	<h1 style="color: black;">Admin Page</h1>
	<form action="admin.php" method="post">
		<button type="submit" name="uPortal">User Portal</button>
	</form>
	<div class="column">
		<div style="background-color: black; color: white; padding: 25px;">
			<h3>Active User</h3>
			<?php 
				$host = "localhost";
				$user = "brewcrew";
				$pass = "ph0ne$@#G";
				@$mysqli = new mysqli($host, $user, $pass, "brewcrew_s20");
				if($mysqli->connect_error) {
					die("Connection Failed " . $conn->connect_error);
				}
				
				$sql = "SELECT * FROM users";
				
				$result = $mysqli->query($sql);
				if ($result->num_rows > 0) {
					echo "<table>";
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["password"] . "</td><td>" . $row["type"] . "</td></tr>";
					}
					echo "</table>";
				} 
			?>
			<form action="admin.php" method="post">
				<label>User Id</label>
				<textarea class="form-control" id="seach_1" rows="1" cols="30" name="delUser"></textarea>
				<label>Change Status</label>
				<textarea class="form-control" id="seach_1" rows="1" cols="30" name="upUser"></textarea>
				<button type="submit" name="upUserB">Update</button>
				<button type="submit" name="appDelUser">Remove</button>
			</form>
		</div>
	</div>
	
	<div class="column">
		<div style="background-color: black; color: white; padding: 25px;">
			<h3>Beers</h3>
			<?php 
				$host = "localhost";
				$user = "brewcrew";
				$pass = "ph0ne$@#G";
				@$mysqli = new mysqli($host, $user, $pass, "brewcrew_s20");
				if($mysqli->connect_error) {
					die("Connection Failed " . $conn->connect_error);
				}
				
				$sql = "SELECT * FROM beers";
				
				$result = $mysqli->query($sql);
				if ($result->num_rows > 0) {
					echo "<table>";
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["beer_id"] . "</td><td>" . $row["brand"] . "</td><td>" . $row["name"] . "</td><td>" . $row["country"] . 
								"</td><td>" . $row["type"] . "</td><td>" .$row["price"] . "</td><td>" . $row["calories"] . "</td><td>" . $row["alc_percent"] . "</td></tr>";
					}
					echo "</table>";
				} else {
					
				}
			?>
			<form action="admin.php" method="post">
				<label>Remove Beer Id</label>
				<textarea class="form-control" id="seach_1" rows="1" cols="30" name="delBeer"></textarea>
				<button type="submit" name="appDelBeer">Remove</button>
			</form>
		</div>
	</div>
	
	<div class="column">
		<div style="background-color: black; color: white; padding: 25px;">
			<h3>Pending Add</h3>
			<?php 
				$host = "localhost";
				$user = "brewcrew";
				$pass = "ph0ne$@#G";
				@$mysqli = new mysqli($host, $user, $pass, "brewcrew_s20");
				if($mysqli->connect_error) {
					die("Connection Failed " . $conn->connect_error);
				}
				
				$sql = "SELECT * FROM requests";
				
				$result = $mysqli->query($sql);
				if ($result->num_rows > 0) {
					echo "<table>";
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row[request_id] . "</td><td>" . $row["brand"] . "</td><td>" . $row["name"] . "</td><td>" . $row["country"] . 
								"</td><td>" . $row["type"] . "\t</td><td>" .$row["price"] . "</td><td>" . $row["calories"] . "</td><td>" . $row["alc_percent"] . "</td></tr>";
					}
					echo "</table>";
				} else {
					echo "No pending requests";
				}
			?>
			<form action="admin.php" method="post">
				<label>Deny Request Id </label> 
				<textarea style="width: 20%;" class="form-control" id="seach_1" rows="1" cols="30" name="delReq"></textarea>
				<button type="submit" name="appDelReq">Deny</button>
				<button type="submit" name="approve">Approve ALL</button>
			</form>
		</div>
	</div>
	
	<div class="column">
		<div style="background-color: black; color: white; padding: 25px;">
			<h3>Comments</h3>
			<?php 
				$host = "localhost";
				$user = "brewcrew";
				$pass = "ph0ne$@#G";
				@$mysqli = new mysqli($host, $user, $pass, "brewcrew_s20");
				if($mysqli->connect_error) {
					die("Connection Failed " . $conn->connect_error);
				}
				
				$sql = "SELECT * FROM comments;";
				
				$result = $mysqli->query($sql);
				if ($result->num_rows > 0) {
					echo "<table>";
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["comment_id"] . "</td><td>" . $row["comment"] . "</td><td>" . $row["rating"] . "</td></tr>";
					}
					echo "</table>";
				} 
			?>
			<form action="admin.php" method="post">
				<label>Remove Comment Id</label>
				<textarea class="form-control" id="seach_1" rows="1" cols="30" name="delComm"></textarea>
				<button type="submit" name="appDelComm">Remove</button>
			</form>
		</div>
	</div>
	
	<?php

		$uname = $_POST["email"];
		$brand = $_POST["brand"];
		$name = $_POST["name"];
		$country = $_POST["country"];
		$type = $_POST["type"];
		$price = $_POST["price"];
		$cal = $_POST["cal"];
		$percent = $_POST["alc_p"];
		$uname = $_POST["email"];
		
		$host = "localhost";
		$user = "brewcrew";
		$pass = "ph0ne$@#G";
	
	
		@$mysqli = new mysqli($host, $user, $pass, "brewcrew_s20");
	
		if($mysqli->connect_error) {
			die("Connection Failed " . $conn->connect_error);
		}
		
		if(isset($_POST["approve"])) {
			$sql = "SELECT * FROM requests";
			$result = $mysqli->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
						$b = $row["brand"];
						$n = $row["name"];
						$c = $row["country"];
						$t = $row["type"];
						$p = $row["price"];
						$cal = $row["calories"];
						$a = $row["alc_percent"];
						
						$commit = "INSERT INTO beers (brand, name, country, type, price, calories, alc_percent) 
						VALUES('" . $b . "', '" . $n . "', '" . $c . "', '" . $t . "', '" . $p . "', '" . $cal . "', '" . $a . "')";
						$work = $mysqli->query($commit);
						
						$del = "DELETE FROM requests WHERE request_id ='" . $row["request_id"] . "'";
						$doit = $mysqli->query($del);
				}
			}
		}
			
		if(isset($_POST["appDelBeer"])) {
			$del = "DELETE FROM beers WHERE beer_id ='" . $_POST["delBeer"] . "'";
			$doit = $mysqli->query($del);
		}
		
		if(isset($_POST["appDelUser"])) {
			$del = "DELETE FROM beers WHERE beer_id ='" . $_POST["delUser"] . "'";
			$doit = $mysqli->query($del);
		}
		
		if(isset($_POST["appDelReq"])) {
			$del = "DELETE FROM requests WHERE request_id ='" . $_POST["delReq"] . "'";
			$doit = $mysqli->query($del);
		}
		
		if(isset($_POST["upUserB"])) {
			$update = "UPDATE users SET type ='" . $upUser . "' WHERE user_id = '" . $delUser . "'";
			$doit = $mysqli->query($update);
		}
		
		if(isset($_POST["appDelComm"])) {
			$del = "DELETE FROM comments WHERE comment_id ='" . $_POST["delComm"] . "'";
			$doit = $mysqli->query($del);
		}
		
		if(isset($_POST["uPortal"])) {
			header("location: user.php");
		}
	?>
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	
</body>
</html>