<?php
    include "home.php";
    $con= mysqli_connect("localhost","root","","employe");
    if(!$con)
    die ("enable to connect");
    $s="select * from emp";
    $rs=mysqli_query($con,$s);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<center><table border=1>";
    echo"<tr>";
    echo"<td><h4>ID";
    echo"<td><h4>NAME";
    echo"<td><h4>DEPARTMENT";
    echo"<td><h4>SALARY";

    while($r=mysqli_fetch_array($rs))
    {
        echo "<tr>";
        echo "<td>$r[0]";
        echo "<td>$r[1]";
        echo "<td>$r[2]";
        echo "<td>$r[3]";
      
    }
?>
 