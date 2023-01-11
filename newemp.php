<?php
    include "home.php";
    if(isset($_GET["btn"]))
    {
        $a=$_GET["t1"];
        $b=$_GET["t2"];
        $c=$_GET["t3"];
        $d=$_GET["t4"];

        $con=mysqli_connect("localhost","root","","employe");
        if(!$con)
            die("enable to connect");
            $s="insert into emp values('$a','$b','$c','$d')";
            mysqli_query($con,$s);
            mysqli_close($con);
            echo "<script> alert('Sucessfully')</script>";

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form>
            <table border="3">
                <tr>
                    <td>Enter Employe ID</td>
                    <td><input type="text" name="t1"></td>
                </tr>
                <tr>
                    <td>Enter Employe Name </td>
                    <td><input type="text" name="t2"></td>
                </tr>
                <tr>
                    <td>Enter Employe Department</td>
                    <td><input type="text" name="t3"></td>
                </tr>
                <tr>
                    <td>Enter Employe Salary</td>
                    <td><input type="text" name="t4"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="submit" name="btn">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>