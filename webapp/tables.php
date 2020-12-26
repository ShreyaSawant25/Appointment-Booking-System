<?php
  $conn=mysqli_connect("localhost","root","","myDB");
  if(!$conn)
	   echo "Connection Failed.<br>";
  else
	   echo "Connection Successfull.<br>";
  $q1="create table users(User_name varchar(8) primary key,
                          First_Name varchar(20) not null,
                          Middle_Name varchar(20) not null,
						  Last_Name varchar(20) not null,
						  Date_of_Birth varchar(30) not null,
						  Phone int(10) not null,
						  Health_Problems varchar(100) not null,
						  Gender varchar(20) not null,
						  Address varchar(90) not null,
						  Adhar_number int(7) not null,
						  Marital_status varchar(20) not null,
						  Email varchar(40) not null,
						  Password varchar(15) not null
						)";
	$c1=mysqli_query($conn,$q1);
	if(!$c1)
		echo "Error in creating Patients table.<br>";
	else
		echo "Users table created successfully.<br>";
	
	$q2="create table doctor(D_ID INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	                         Name varchar(80) not null,
							 Day varchar(100) not null,
							 Opening_Time varchar(15) not null,
							 Closing_Time varchar(15) not null,
							 Speciality varchar(30) not null
	                         )";
	$c2=mysqli_query($conn,$q2);
	if(!$c2)
		echo "Error in creating doctors table.<br>";
	else
		echo "Doctor table created successfully.<br>";
	
	$q3="create table book_slot(User_name varchar(8) not null references users(User_name) on delete cascade,
	                            D_ID INT(2) not null references doctor(D_ID) on delete cascade,
								day varchar(20) not null
								);";
								
	$c3=mysqli_query($conn,$q3);
	if(!$c3)
		echo "Error in creating book_slot table.<br>";
	else
		echo "Book_slot table created successfully.<br>";
?>