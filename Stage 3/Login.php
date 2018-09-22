<?php

$conn = mysqli_connect("localhost","root","","leaderboard");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$username = stripslashes($username);
	$password = stripslashes($password);

$sql = "SELECT * FROM login WHERE username='$username'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if($row['password']===$password)
{
	header("location:Leaderboard - Stage3.php");
}
else
{
	echo 'Incorrect Username or Password, Click below to retry.<br> <a href="index.html">Retry</a>';
}
?>
