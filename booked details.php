<html>
<head>
    <style>
    body{
        background-color:black;
        color:white;
        font-size:22px;
    }
    table{
        background-color:white;
        color:black;
    }
    table tr td{
        padding-top: 12px;
        padding-bottom: 12px;
        padding-right:62px;
        padding-left: 62px;
        font-family:italic;
        font-size:33px;
    }
    button{
        font-size:22px;
        background-color:yellow;
        width: 250px;
        height:60px;
        border-radius:11px
        
    }
    h1{
        background-color:green;
    }
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
echo "<center><br><h1>Welcome $name</h1></center>";
echo "<center><h2>Your Details are Here</h2></center>";
echo "<center><table border=12px font-color=white><tr><td><center> YOUR NAME</center> </td><td><center> $name</center></td></tr>
<tr><td bgcolor=cyan><center> YOUR MOBILE NUMBER </center></td><td bgcolor=cyan><center> $mobile</center></td></tr>
<tr><td><center> YOUR AGE</center></td><td><center> $age</center></td></tr>
<tr><td bgcolor=cyan><center> YOUR ADDRESS </center></td><td bgcolor=cyan><center> $location</center></td></tr>
<tr><td><center> YOUR ROOM</center></td><td ><center> $room</center></td></tr>
<tr><td bgcolor=cyan>WANT TO CANCEL BOOKING CLICK ON </td><td bgcolor=cyan><a href=cancel.php><button>CANCEL ROOM</button></a></td></tr></table></center>";
echo "";

?>

</body>
</html>