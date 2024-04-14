<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

$Name=$_POST['name'];
$Mobile=$_POST['mobile'];
$Location=$_POST['location'];
$Age=$_POST['age'];

$Room=$_POST['room'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM hotel where Name ='".$Name."' and Mobile='".$Mobile."' and Location='".$Location."' and Age='".$Age."' and Room='".$Room."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
	$row = $result->fetch_assoc();
	$_SESSION['Name']=$row['Name'];
	$_SESSION['Mobile']=$row['Mobile'];
	$_SESSION['Location']=$row['Location'];
	$_SESSION['Age']=$row['Age'];
	$_SESSION['Room']=$row['Room'];

	header("Location:success.php");
	}
else
	{
	echo '<script>
	confirm("invalid data");
	header("Location:booked.php");
	</script>';
	}
?>