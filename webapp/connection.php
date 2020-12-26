<?php
   $conn=mysqli_connect("localhost","root","");
   if(!$conn)
	   echo "Unsuccessfull Connection.<br>";
   else
	   echo "Successfull connection.<br>";
   $q1="create database myDB;";
   $c1=mysqli_query($conn,$q1);
   if(!$c1)
	   echo "Error in creating databases.<br>";
   else
	   echo "Database Appointments created.<br>";
?>