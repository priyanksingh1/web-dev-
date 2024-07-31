<?php
 error_reporting("E_ALL");//this will not show any warning msg.
 $host="localhost";
 $user="root";
 $pass="";
 $bdname="parakram";
 $con=mysqli_connect($host,$user,$pass,$dbname);
 if($con)
 {
 	echo"connection Established<br>";
 }
 esle 
 {
 	echo"connection not Established";
 }
?>	