<html>
<head>
<title>Success page</title>
<style>
h1
{
color:red;
text-align:center;
}
body{
	background-color:black;
	color:white;
}
table{
	border-color:white;
	font-size:30px;
}
table td{}

</style>
</head>
<body>
<?php
session_start();
$name=$_SESSION['Name'];
$mobile=$_SESSION['Mobile'];
$location=$_SESSION['Location'];
$age=$_SESSION['Age'];
$room=$_SESSION['Room'];

if(isset($_SESSION['Name']))
	{
		header("Location:booked details.php");
	}
else
	{
	header("Location:booked.php");
	}
?>

</body>
</html>