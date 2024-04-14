<!DOCTYPE html>
<html lang="en">
<head><style>
    button{
        background-color: black;
        color: white;
        font-size: 25px;
        border-radius:  7px;
    }
    input{
        border-radius: 10px;
    }
    p{margin-left: 1380px;
    font-size: ;}
    table input{background-color: white;}
    table tr td input{font-size: 25px;}
    table th{padding-bottom: 45px;
        padding-top: 14px;}
    div{font-size: 30px;}
    table{background-color: rgb(4, 6, 3);
        padding-inline-start: 12px;
        padding-inline-end: 12px;
        padding-top: 12px;
        padding-bottom: 12px;
        border-radius: 50px;
    font-size: 35px;}
    body{background-image: url("1st.jpg");
    background-size: 1534px 800px;
    color: whitesmoke;}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="booking.php" align="right"><button type="button">Go Back</button></a></p><br><br><br><br><br><center><form action="login_check.php "method="post" name="myForm" onsubmit="return validateForm()"><table><tr><th colspan="2"><center style="color: rgb(0, 255, 21);"><u>Please fill these details to see your details</u></th></td></center>
        <tr><tr><tr><tr><tr><tr><td>Name:<td><input type="text" name="name" placeholder="name"Required id="name" on keyup="myFunction()"><br>
        <tr><td>Mobile Number:<td><input type="int" name="mobile" placeholder="mobile"Required  onkeyup="mob(this)" ><div id="mobile validate" style="font-size: 18px; color: rgb(253, 19, 19);"></div>
        <tr><td>Location:<td><input type="text" name="location" placeholder="location"Required><br>
        <tr><td>Age:<td><input  name="age" placeholder="age"Required id="age" ><div id="age valid" style="font-size: 18px; color: rgb(253, 19, 19);"></div>
        <tr><td>Room no.</td><td ><input type="int" placeholder="Room no"name="room"Required id="room" onkeyup="room()"><div id="room valid" style="font-size:18px;color:red;"></div></td></tr>
        <tr><td><td><input type="submit" value="find details"style="background-color:  rgb(0, 255, 21) ;"></td></tr>
        
    </form></center></table>
</body>
<script src="formvalidation.js"></script>
</html>