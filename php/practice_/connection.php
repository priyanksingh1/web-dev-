<?php
 error_reporting("E_ALL");
 $host="localhost";
 $user="root";
 $pass="";
 $con=mysqli_connect($host,$user,$pass);
 if ($con)
  {
 	echo "connection established";
  }
  else
  {
  	echo "connection not established";
  }	
?>  