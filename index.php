<?php include 'database.php'; ?>

<?php
//creates Select Query
	$query = "SELECT * FROM shouts ORDER BY id DESC";
	$shouts = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>JS Shout Box</title>
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="container">
			<header>
				<h1>Javascript/Ajax/MySQL Shout Box</h1>
			</header>
			<div id="shouts">
				<ul>
					<?php while($row = mysqli_fetch_assoc($shouts)) : ?>
						<li><?php echo $row['name']; ?>: 
							<?php echo $row['shout']; ?>:
							[<?php echo $row['date']; ?>]
						</li>
					<?php endwhile; ?>
				</ul>	
			</div>
			<footer>
				<form>
					<label>NAME: </label>
					<input type="text" id="name">
					<label>SHOUTOUT: </label>
					<input type="text" id="shout">
					<input type="submit" id="submit" value="SHOUT!">
				</form>
			</footer>
		</div>
		<script src="js/app.js"></script>
	</body>
</html>