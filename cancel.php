<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="hotel";
  
  session_start();
  $name=$_SESSION['Name'];
  $mobile=$_SESSION['Mobile'];
  $location=$_SESSION['Location'];
  $age=$_SESSION['Age'];
  $room=$_SESSION['Room'];
  //create connection
  $conn=new mysqli($servername,$username,$password,$dbname);
  //check connection
  if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
  }
  $sql="DELETE  FROM hotel WHERE  Name ='".$name."' and Mobile='".$mobile."' and Location='".$location."' and Age='".$age."' and Room='".$room."' ";
  if ($conn->query($sql) === TRUE) {
    header("location:cancel.html"); }
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  ?>
</body>
</html>