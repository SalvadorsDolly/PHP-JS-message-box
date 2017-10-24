<?php include 'database.php'; ?>

<?php
	if(isset($_POST['name']) && isset($_POST['shout'])) {
		//function below helps escape harmful characters to database, IE SQL injection
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$shout = mysqli_real_escape_string($con, $_POST['shout']);
		$date = mysqli_real_escape_string($con, $_POST['date']);
 
		// set the time zone
		date_default_timezone_set('America/New_York');
		$date = date('h:i:s a',time());

		//query for database
		$query = "INSERT INTO shouts(name, shout, date)
		VALUES ('$name', '$shout', '$date')";

		if(!mysqli_query($con, $query)) {
			echo 'Error: '.mysqli_error($con);

		} else {
			echo '<li>'.$name.': '.$shout.' ['.$date']</li> ';

		}
	}

