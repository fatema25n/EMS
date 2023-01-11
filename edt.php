<?php
 include"home.php";

     $eid="";
     $ename="";
     $edept="";
     $esal="";
 
?>
<?php
    
    $con=mysqli_connect("localhost","root","","employe");
       if(!$con)
           die ("enable to connect");

           if(isset($_GET["btn"]))
   {
       $a=$_GET['t11'];

       $s="select * from emp where eid='$a'";
       $rs=mysqli_query($con,$s);
       $t=mysqli_num_rows($rs);
       if ($t==0)
           echo "<script> alert ('NO RECORD FOUND')</script>";
       else
       {
           $r=mysqli_fetch_array($rs); 
           $eid=$r[0];
           $ename=$r[1];
           $edept=$r[2];
           $esal=$r[3];
       }
   }
   if(isset($_GET['save_btn']))
   {
       $a=$_GET["t1"];
       $b=$_GET["t2"];
       $c=$_GET["t3"];
       $d=$_GET["t4"];

       $s="update emp set ename='$b', edept='$c',esal='$d' where eid='$a'";
       mysqli_query($con,$s);
       echo "<script> alert ('UPDATE SUCESSEFULLY')</script>";
   }
   if(isset($_GET['del_btn']))
   {
       $a=$_GET["t1"];

       $s="delete from emp where eid='$a'";
       mysqli_query($con,$s);
       echo "<script> alert ('DELETE SUCESSEFULLY')</script>";
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
    <form method="GET" action="edt.php">
        <br>
        <br>
        <br>
        <table border='1' >
            <tr>
                <td>SEARCH BY ID</td>
                <td><input type="text" name="t11" ></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="btn" value="Search"></td>
            </tr>
        </table>

        <br>

        <table border="1">
            <tr>
                <td>ENTER EMPLOYEE ID</td>
                <td><input type="text" name="t1" value='<?php echo $eid ?>'></td>
            </tr>
            <tr>
                <td>ENTER EMPLOYEE NAME</td>
                <td><input type="text" name="t2" value='<?php echo $ename ?>'></td>
            </tr>
            <tr>
                <td>ENTER EMPLOYEE DEPARTMENT</td>
                <td><input type="text" name="t3" value='<?php echo $edept ?>'></td>
            </tr>
            <tr>
                <td>ENTER EMPLOYEE SALARY</td>
                <td><input type="text" name="t4" value='<?php echo $esal ?>'></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="save_btn" value="Update Record">
                    <input type="submit" name="del_btn" value="Delete Record">
                </td>
            </tr>
        </table>
    </form>
    </center>
    
</body>
</html>
