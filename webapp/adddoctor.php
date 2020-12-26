<!DOCTYPE html>
<html>
  <head>
    <title>Slot Booking</title>
    <style>
	   ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
       }

       li {
        float: left;
       }

       li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
       }

       li a:hover {
        background-color: #111;
       }
	   body{
        background-color:#f1fcfc;
        color:#133b5c;
        size:50px;
        margin: 0px;
       }
	   #heading1{
		   font-size:30px;
		   color:#e23e57;
	   }
      .middle{
       color:slateblue;
      }
      body{
        background-color: #cbf1f5;
      }
	  header{
        color:#ffbb91;
        font-size:25px;
        background-color:#1e5f74;
        height:60px;
        padding-top:0px;
      }
      footer{
        color:#ffbb91;
        font-size:20px;
        background-color:#1e5f74;
        height:40px;
        padding-top:30px;
      }
	  .button{
        background-color: #010a43;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      }
	  .in{
        display: inline;
		font-size:15px;
		
      }
    </style>
	<script>
	    function validate()
          {
              var name=document.getElementById("name").value;
			  var day=document.getElementById("day").value;
			  var ot=document.getElementById("ot").value;
			  var ct=document.getElementById("ct").value;
			  var speciality=document.getElementById("speciality").value;
			  if(name=="")
              {
                document.getElementById("fn1").innerHTML="Please enter the name.";
                return false;
              }
			  else if(day == "")
              {
                document.getElementById("fn2").innerHTML="Please choose a day.";
                return false;
              }
			  else if(ot == "")
              {
                document.getElementById("fn3").innerHTML="Please choose the opening time.";
                return false;
              }
			  else if(ct == "")
              {
                document.getElementById("fn4").innerHTML="Please choose the closing time.";
                return false;
              }
			  else if(speciality == "")
              {
                document.getElementById("fn5").innerHTML="Please choose the speciality.";
                return false;
              }
              else
              {
                 return true;
              }
          }
	</script>
  </head>
  <body>
    <header>
        <span style="float:left;padding-top:15px;">Appointment Booking System</span>
        <span style="float:right;background-color:#ffbb91;"><img src="mylogo.png" align="right" style="width:60px;height:60px;"></span>
    </header>
	<ul>
        <li><a class="active" href="admin.php">HOME</a></li>
        <li><a href="adddoctor.php">ADD DOCTOR</a></li>
        <li><a href="removedoctor.php">REMOVE DOCTOR</a></li>
        <li><a href="admin_login.html">LOGOUT</a></li>
    </ul>
	<br><br>
	<p id="heading1" align="center">
         ENTER THE DETAILS
    </p>
    <form align="center" method="post" onsubmit=" return validate()" value="Reset form">
	    <label for="name">FULL NAME</label>
        <input type="text" class="in" id="name" name="name" style="color:black;">
        <p id="fn1" class="in" style="color:red;">*</p><br><br>
			
		<label>DAY</label>
        <select id="day" name="day">
		   <option value=""></option>
           <option value="Monday">Monday</option>
           <option value="Tuesday">Tuesday</option>
           <option value="Wednesday">Wednesday</option>
           <option value="Thursday">Thursday</option>
		   <option value="Friday">Friday</option>
		   <option value="Saturday">Saturday</option>
        </select>
        <p id="fn2" class="in" style="color:red;">*</p><br><br>
		
		
		<label>OPENING TIME</label>
        <select id="ot" name="ot">
		   <option value=""></option>
		   <option value="9:00am">9:00am</option>
           <option value="10:00am">10:00am</option>
           <option value="11:00am">11:00am</option>
           <option value="12:00pm">12:00pm</option>
           <option value="2:00pm">2:00pm</option>
		   <option value="3:00pm">3:00pm</option>
		   <option value="4:00pm">4:00pm</option>
        </select>
		<p id="fn3" class="in" style="color:red;">*</p><br><br>
		
		<label>CLOSING TIME</label>
        <select id="ct" name="ct">
		   <option value=""></option>
           <option value="10:00am">10:00am</option>
           <option value="11:00am">11:00am</option>
           <option value="12:00pm">12:00pm</option>
		   <option value="1:00pm">1:00pm</option>
           <option value="2:00pm">2:00pm</option>
		   <option value="3:00pm">3:00pm</option>
		   <option value="4:00pm">4:00pm</option>
		   <option value="5:00pm">5:00pm</option>
        </select>
		<p id="fn4" class="in" style="color:red;">*</p><br><br>
		
		<label>SPECIALITY</label>
        <select id="speciality" name="speciality">
		   <option value=""></option>
		   <option value="Physician">Physician</option>
           <option value="Dermatologist">Dermatologist</option>
           <option value="Gynaecologist">Gynaecologist</option>
           <option value="ENT">ENT</option>
           <option value="Paediatrician">Paediatrician</option>
		   <option value="Cardiologist">Cardiologist</option>
		   <option value="Dentist">Dentist</option>
        </select>
		<p id="fn5" class="in" style="color:red;">*</p><br><br>
		
		<button type="buttton" class="button" name="add">SUBMIT</button><br>
	</form>
	<?php
	if(isset($_POST['add']))
	{
		$conn=mysqli_connect("localhost","root","","appointments");
		$name=$_POST["name"];
		$day=$_POST["day"];
		$ot=$_POST["ot"];
		$ct=$_POST["ct"];
		$speciality=$_POST["speciality"];
		$q1="insert into `doctor`(`Name`,`Day`,`Opening_Time`,`Closing_Time`,`Speciality`) values('$name','$day','$ot','$ct','$speciality');";
		$r1=mysqli_query($conn,$q1);
	}
    ?>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <span style="float:left">Quicko Hospital,Block 7,Ziva Apartments,Panajim Goa</span>
        <span style="float:right">Contact us:supportus@quicko.in|call @+919056784356</span>
    </footer>
  </body>
</html>
