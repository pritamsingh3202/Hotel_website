<!DOCTYPE html>
<html lang="en">
<head>
    <script src="hotel.js"></script>
    <style>
    input{
        border-radius: 10px;
    }
    button{
        background-color: black;
        color: white;
        font-size: 25px;
    }
    p{margin-left: 1290px;
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
    <title>Document</title>
</head>
<body>
    <p><a href="booked.php" align="right"><button type="button">Already Booked</button></a></p><br><br><br><br><br>    <center>
        <form  action="room booking.php" method="post"name="myForm" onsubmit="return validateForm()"><table><tr><th colspan="2"><center style="color: rgb(0, 255, 21);"><u>Please fill these details to book your room</u></th></td></center>
        <tr><tr><tr><tr><tr><tr><td>Name:<td><input type="text" name="name" placeholder="name"Required id="name" >
        <tr><td>Mobile Number:<td><input type="int" name="mobile" placeholder="mobile"Required id="mobile" ><div id="mobile validate" style="font-size: 18px; color: rgb(253, 19, 19);"></div>
        <tr><td>Age:<td><input type="int" name="age" placeholder="age"Required id="age">
        <tr><td>Location:<td><input type="text" name="location" placeholder="location"Required id="location"onkeyup="mob()"><br>
        
        <tr><td><td><input type="submit" value="Choose your room" style="background-color:  rgb(0, 255, 21) ;"  ></td></tr>
    </form></center></table>
    
</body>
<script src="formvalidation.js"></script>
</html>