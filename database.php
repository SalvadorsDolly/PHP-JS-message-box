<?php
// 1st we connect to MySql
$con = mysqli_connect("localhost", "root", "ghost_girl", "jsshoutbox");

if(mysqli_connect_errno()){
	echo 'Failed to connect: '.mysqli_connect_error();

}

?>