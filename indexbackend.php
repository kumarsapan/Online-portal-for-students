<?php
header("X-XSS-Protection: 1; mode=block");
/*session_start();*/
error_reporting(0);
$uname = $_GET['uname'];
$pass = $_GET['pass'];
$db_connection = mysqli_connect("localhost", "root", "", "login");
		$username =  $uname;
		$password =  $pass;
		$query = "SELECT * FROM details WHERE username = '" . $username. "' AND password = '" . $password . "'"; 
$result = mysqli_query($db_connection,$query);
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_/*SESSION*/["username"] = $row['username'];
} 
else {
/*$msg = "Invalid Username or Password!";*/
echo '<script>alert("Invalid Username or Password!")</script>';


}
if(isset($_/*SESSION*/["username"])) {
header("Location:index.html");
}
?>