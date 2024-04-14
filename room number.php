<!DOCTYPE html>
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
  
  $name=$_SESSION['name'];
  $mobile=$_SESSION['mobile'];
  $location=$_SESSION['location'];
  $age=$_SESSION['age'];
  $room=$_SESSION['room']=$_GET['room'];
  //create connection
  $conn=new mysqli($servername,$username,$password,$dbname);
  //check connection
  if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
  }
  $sql="INSERT INTO hotel VALUES ('$name','$mobile','$location','$age','$room' )";
  if ($conn->query($sql) === TRUE) {
    header("location:makepayment.html"); }
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  ?>
</body>
</html>
