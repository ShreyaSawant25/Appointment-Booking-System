<!DOCTYPE html>
<?php
	if(isset($_POST['add']))
	{
		$conn=mysqli_connect("localhost","root","","appointments");
		$did=$_POST["did"];
		$day=$_POST["day"];
		$ot=$_POST["ot"];
		$ct=$_POST["ct"];
		$q1="UPDATE `doctor` SET `Day` = '$day', `Opening_Time` = '$ot', `Closing_Time` = '$ct' WHERE `doctor`.`D_ID` = '$did';";
		$r1=mysqli_query($conn,$q1);
		header('location:updatedetails.php');
	}
?>
<html>
  <head>
    <title>Updating Details</title>
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
       #abs {
        position: absolute;
        border: 1px solid red;
        top: 70px;
       }
      .header{
        color:#0f3057;
        font-size:20px;
      }
      .footer{
        color:#7d0633;
        font-size:15px;
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
              var did=document.getElementById("did").value;
			  var day=document.getElementById("day").value;
			  var ot=document.getElementById("ot").value;
			  var ct=document.getElementById("ct").value;
			  if(did=="")
              {
                document.getElementById("fn1").innerHTML="Please enter the Identification number.";
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
         ENTER THE DETAILS TO BE UPDATED
    </p>
    <form align="center" method="post" onsubmit=" return validate()" value="Reset form">
	    <label for="did">DOCTORS IDENTIFICATION NUMBER</label>
        <input type="text" class="in" id="did" name="did" style="color:black;">
        <p id="fn1" class="in" style="color:red;">*</p><br><br>
		
        <label>CHANGED DAY</label>
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
		
		
		<label>CHANGED OPENING TIME</label>
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
		
		<label>CHANGED CLOSING TIME</label>
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
		
		<button type="buttton" class="button" name="add">SUBMIT</button><br>
	</form>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <span style="float:left">Quicko Hospital,Block 7,Ziva Apartments,Panajim Goa</span>
        <span style="float:right">Contact us:supportus@quicko.in|call @+919056784356</span>
    </footer>
  </body>
</html>
