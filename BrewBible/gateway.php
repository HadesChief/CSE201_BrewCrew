
<?php 
				
	$username = $_POST["username"];
	$password = $_POST["pass"];
	$host = "localhost";
	$user = "brewcrew";
	$pass = "ph0ne$@#G";
		
	@$mysqli = new mysqli($host, $user, $pass, "brewcrew_s20");
		
	if($mysqli->connect_error) {
		die("Connection Failed " . $conn->connect_error);
	}
		
	$sql = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";
	$result = $mysqli->query($sql);
	
	print $sql;
	
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		if($row["type"] == 'admin') {
			header("location: admin.php");
		} else if($row["type"] == 'moderator') {
			header("location: moderator.php");
		} else {
			header("location: user.php?username=" . $username);
		}
	} else {
		
		//header("location: portal.html");
	}	
?>