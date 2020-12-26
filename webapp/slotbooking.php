<?php
	if(isset($_POST['book']))
	{
		$conn=mysqli_connect("localhost","root","","appointments");
		$uname=$_POST["uname"];
		$did=$_POST["did"];
		$day=$_POST["day"];
		$q1="insert into book_slot values('$uname','$did','$day');";
		$r1=mysqli_query($conn,$q1);
		header('location:success.html');
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Slot Booking</title>
    <style>
	   body{
        background-color:#f1fcfc;
        color:#133b5c;
        size:50px;
        margin: 0px;
       }
	   #heading1{
		   font-size:30px;
		   color:#e23e57;
		   font-family:"Lucida Console", "Courier New", monospace;
	   }
	   #heading2{
		   font-size:20px;
		   color:#0f3057;
		   font-family:"Lucida Console", "Courier New", monospace;
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
              var un=document.getElementById("uname").value;
			  var did=document.getElementById("did").value;
			  var day=document.getElementById("day").value;
              un=/^Qui[0-9]{3}[a-z]{2}$/;
			  if(un.test(username)==false)
              {
                alert("Invalid username.Please enter correct username.");
                document.getElementById("uname").value = "";
                document.getElementById("did").value = "";
				document.getElementById("day").value = "";
				
                return false;
              }
			  else if(did == "")
              {
                alert("Please enter doctor's registration number.");
                return false;
              }
			  else if(day == "")
              {
                alert("Please enter the day.");
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

    <p id="heading1" align="center">
         Hurray it's a final step towards booking your Appointment
    </p>
	<br>
	<p id="heading2" align="center">
         Enter the details
    </p>
    <form align="center" method="post" onsubmit=" return validate()" value="Reset form">
	    <label for="uname">USER NAME</label>
        <input type="text" class="in" id="uname" name="uname" style="color:black;">
        <p id="fn1" class="in" style="color:red;">*</p><p id="fn2" class="in">Ex:Qui123qw</p><br><br>
		
		<label for="did">DOCTOR'S IDENTIFICATION NUMBER</label>
        <input type="text" class="in" id="did" name="did" style="color:black;">
        <p id="fn3" class="in" style="color:red;">*</p><br><br>
		
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
        <p id="fn4" class="in" style="color:red;">*</p><br><br><br>
		<button type="buttton" class="button" name="book">SUBMIT</button><br>
		
	</form>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<a href="AvailableAppointments.php">PREVIOUS</a><br><br>
    <footer>
        <span style="float:left">Quicko Hospital,Block 7,Ziva Apartments,Panajim Goa</span>
        <span style="float:right">Contact us:supportus@quicko.in|call @+919056784356</span>
    </footer>
  </body>
</html>
