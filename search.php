<?php
    include "home.php";
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
    <form method="GET" action=search.php>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <table align="center" border="1">
            <tr><td>Search By ID
                <td><input type="text" name="t1">

                <tr>
                    <td align="center"  colspan="2"><input type="submit" name="btn" value="search">
             </tr></td>
        </table>    
     </form>
     <br>
</body>
</html>
<?php
    if(isset($_GET["btn"]))
    {
        $a=$_GET["t1"];
        $con=mysqli_connect("localhost","root","","employe");
            if(!$con)
                die("unable to coonect");

        $s="select * from emp where eid='$a'";
        
        $rs=mysqli_query($con,$s);
        $t=mysqli_num_rows($rs);
        if ($t==0)
        echo "<script> alert ('record not found') </script>";
        else
        $r=mysqli_fetch_array($rs);
        
        echo"<br>";
        echo "<table border='2' align='center'>";
        echo "<tr> <td> EMPLOYEE ID <td> $r[0]";
        echo "<tr> <td> EMPLOYEE NAME <td> $r[1]";
        echo "<tr> <td> EMPLOYEE DEPARTMENT <td> $r[2]";
        echo "<tr> <td> EMPLOYEE SALARY <td> $r[3]";
        echo"</table>";
    }

?>
