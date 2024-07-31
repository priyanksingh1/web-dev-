<?php
  include("connection.php");
  $db_create="create database db1";
  $qry=mysqli_query($con,$db_create);
  if($qry)
  {
  	echo "database created successfully";
  }
  else
  {
  	echo "database not created".mysqli_error();
  }
?>