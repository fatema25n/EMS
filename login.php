<?php
    include "home.php";
    if(isset($_POST["btn"]))
    {
        $a=$_POST["t1"];
        $b=$_POST["t2"];

        $con=mysqli_connect("localhost","root","","employe");
        if(!$con)
            die (" unable to coonect");
        else
             $s="select * from login where id='$a' and pw='$b'";
             $rs=mysqli_query($con,$s);
             $t=mysqli_num_rows($rs);
                if($t==0)
                     echo"<script>alert('Incorrect Id or Password')</script>";
                else
                     header('location:home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <center>
    <form method="post" action="login.php">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <table align="center" border="1" >
            <tr>
                <td>login ID</td>
                <td><input type="text" name="t1"></td> 
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="t2"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="btn" value="login"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>