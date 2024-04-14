<html>
    <head>
        <title>Room Booking</title>
        <style>
            h1{
                padding:50px 20px 30px 20px;
                font-size: 50px;
            }
            input{
                background-color:rgb(35, 255, 1);
                height: 70px;
                width: 90px;
                font-family: sans-serif;
                font-size: large;
            }

            button{
                height:50px ;
                width: 80px;
                background-color: rgb(0, 255, 255);
            }
            table tr td{
                padding:8px;
                background-color: black;
                color: whitesmoke;
            }
            div{
                background-color: black;
                color: whitesmoke;
            }
        </style>
        <script>
            function room(x)
            {
            
            }
            

            
            
        </script>
    </head>
    <body>
        <?php
        session_start();
  
        $name=$_SESSION['name']=$_POST['name'];
        $mobile=$_SESSION['mobile']=$_POST['mobile'];
        $location=$_SESSION['location']=$_POST['location'];
        $age=$_SESSION['age']=$_POST['age'];
        ?>
        <center>
            <span id="message"></span>
            <span id="result"></span><span id="button"></span>
                
            
            <div><h1><i>CHOOSE YOUR ROOM</i> </h1></div>
            <form action="room number.php"><table border="black">
                <tr>
            <td rowspan="5"><b>GROUND FLOOR</b></td>
                    <td>
                        <input type="submit" name="room" value="1"></td><td><input type="submit" name="room" value="2"></td><td>
                        <input type="submit" name="room" value="3"></td><td><input type="submit" name="room" value="4"></td><td>
                        <input type="submit" name="room" value="5"></td><td><input type="submit" name="room" value="6"></td><td>
                        <input type="submit" name="room" value="7"></td><td><input type="submit" name="room" value="8"></td><td>
                        <input type="submit" name="room" value="9"></td><td><input type="submit" name="room" value="10">
                    </td></tr>
                <tr>
                    <td>
                        <input type="submit" name="room" value="11"></td><td><input type="submit" name="room" value="12"></td><td>
                        <input type="submit" name="room" value="13"></td><td><input type="submit" name="room" value="14"></td><td>
                        <input type="submit" name="room" value="15"></td><td><input type="submit" name="room" value="16"></td><td>
                        <input type="submit" name="room" value="17"></td><td><input type="submit" name="room" value="18"></td><td>
                        <input type="submit" name="room" value="19"></td><td><input type="submit" name="room" value="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="room" value="21"></td><td><input type="submit" name="room" value="22"></td><td>
                        <input type="submit" name="room" value="23"></td><td><input type="submit" name="room" value="24"></td><td>
                        <input type="submit" name="room" value="25"></td><td><input type="submit" name="room" value="26"></td><td>
                        <input type="submit" name="room" value="27"></td><td><input type="submit" name="room" value="28"></td><td>
                        <input type="submit" name="room" value="29"></td><td><input type="submit" name="room" value="30">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="room" value="31"></td><td><input type="submit" name="room" value="32"></td><td>
                        <input type="submit" name="room" value="33"></td><td><input type="submit" name="room" value="34"></td><td>
                        <input type="submit" name="room" value="35"></td><td><input type="submit" name="room" value="36"></td><td>
                        <input type="submit" name="room" value="37"></td><td><input type="submit" name="room" value="38"></td><td>
                        <input type="submit" name="room" value="39"></td><td><input type="submit" name="room" value="40">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="room" value="41"></td><td><input type="submit" name="room" value="42"></td><td>
                        <input type="submit" name="room" value="43"></td><td><input type="submit" name="room" value="44"></td><td>
                        <input type="submit" name="room" value="45"></td><td><input type="submit" name="room" value="46"></td><td>
                        <input type="submit" name="room" value="47"></td><td><input type="submit" name="room" value="48"></td><td>
                        <input type="submit" name="room" value="49"></td><td><input type="submit" name="room" value="50">
                    </td>
                </tr>
                <tr>
            <td rowspan="5">FIRST FLOOR</td><td>
                        <input type="submit" name="room" value="51"></td><td><input type="submit" name="room" value="52"></td><td>
                        <input type="submit" name="room" value="53"></td><td><input type="submit" name="room" value="54"></td><td>
                        <input type="submit" name="room" value="55"></td><td><input type="submit" name="room" value="56"></td><td>
                        <input type="submit" name="room" value="57"></td><td><input type="submit" name="room" value="58"></td><td>
                        <input type="submit" name="room" value="59"></td><td><input type="submit" name="room" value="60">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="room" value="61"></td><td><input type="submit" name="room" value="62"></td><td>
                        <input type="submit" name="room" value="63"></td><td><input type="submit" name="room" value="64"></td><td>
                        <input type="submit" name="room" value="65"></td><td><input type="submit" name="room" value="66"></td><td>
                        <input type="submit" name="room" value="67"></td><td><input type="submit" name="room" value="68"></td><td>
                        <input type="submit" name="room" value="69"></td><td><input type="submit" name="room" value="70">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="room" value="71"></td><td><input type="submit" name="room" value="72"></td><td>
                        <input type="submit" name="room" value="73"></td><td><input type="submit" name="room" value="74"></td><td>
                        <input type="submit" name="room" value="75"></td><td><input type="submit" name="room" value="76"></td><td>
                        <input type="submit" name="room" value="77"></td><td><input type="submit" name="room" value="78"></td><td>
                        <input type="submit" name="room" value="79"></td><td><input type="submit" name="room" value="80">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="room" value="81"></td><td><input type="submit" name="room" value="82"></td><td>
                        <input type="submit" name="room" value="83"></td><td><input type="submit" name="room" value="84"></td><td>
                        <input type="submit" name="room" value="85"></td><td><input type="submit" name="room" value="86"></td><td>
                        <input type="submit" name="room" value="87"></td><td><input type="submit" name="room" value="88"></td><td>
                        <input type="submit" name="room" value="89"></td><td><input type="submit" name="room" value="90">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="room" value="91"></td><td><input type="submit" name="room" value="92"></td><td>
                        <input type="submit" name="room" value="93"></td><td><input type="submit" name="room" value="94"></td><td>
                        <input type="submit" name="room" value="95"></td><td><input type="submit" name="room" value="96"></td><td>
                        <input type="submit" name="room" value="97"></td><td><input type="submit" name="room" value="98"></td><td>
                        <input type="submit" name="room" value="99"></td><td><input type="submit" name="room" value="100">
                    </td>
                </tr>
                <tr>
            <td rowspan="5">SECOND FLOOR</td><td>
                        <input type="submit" name="room" value="101"></td><td><input type="submit" name="room" value="102"></td><td>
                        <input type="submit" name="room" value="103"></td><td><input type="submit" name="room" value="104"></td><td>
                        <input type="submit" name="room" value="105"></td><td><input type="submit" name="room" value="106"></td><td>
                        <input type="submit" name="room" value="107"></td><td><input type="submit" name="room" value="108"></td><td>
                        <input type="submit" name="room" value="109"></td><td><input type="submit" name="room" value="110">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="room" value="111"></td><td><input type="submit" name="room" value="112"></td><td>
                        <input type="submit" name="room" value="113"></td><td><input type="submit" name="room" value="114"></td><td>
                        <input type="submit" name="room" value="115"></td><td><input type="submit" name="room" value="116"></td><td>
                        <input type="submit" name="room" value="117"></td><td><input type="submit" name="room" value="118"></td><td>
                        <input type="submit" name="room" value="119"></td><td><input type="submit" name="room" value="120">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="room" value="121"></td><td><input type="submit" name="room" value="122"></td><td>
                        <input type="submit" name="room" value="123"></td><td><input type="submit" name="room" value="124"></td><td>
                        <input type="submit" name="room" value="125"></td><td><input type="submit" name="room" value="126"></td><td>
                        <input type="submit" name="room" value="127"></td><td><input type="submit" name="room" value="128"></td><td>
                        <input type="submit" name="room" value="129"></td><td><input type="submit" name="room" value="130">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="room" value="131"></td><td><input type="submit" name="room" value="132"></td><td>
                        <input type="submit" name="room" value="133"></td><td><input type="submit" name="room" value="134"></td><td>
                        <input type="submit" name="room" value="135"></td><td><input type="submit" name="room" value="136"></td><td>
                        <input type="submit" name="room" value="137"></td><td><input type="submit" name="room" value="138"></td><td>
                        <input type="submit" name="room" value="139"></td><td><input type="submit" name="room" value="140">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="room" value="141"></td><td><input type="submit" name="room" value="142"></td><td>
                        <input type="submit" name="room" value="143"></td><td><input type="submit" name="room" value="144"></td><td>
                        <input type="submit" name="room" value="145"></td><td><input type="submit" name="room" value="146"></td><td>
                        <input type="submit" name="room" value="147"></td><td><input type="submit" name="room" value="148"></td><td>
                        <input type="submit" name="room" value="149"></td><td><input type="submit" name="room" value="150">
                    </td>
                </tr>
            </table></form>
        </center>
    </body>
</html>