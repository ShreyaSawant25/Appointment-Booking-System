<!DOCTYPE html>
<?php
	if(isset($_POST['add']))
	{
		$conn=mysqli_connect("localhost","root","","appointments");
		$did=$_POST["did"];
		$q1="DELETE FROM `doctor` WHERE `doctor`.`D_ID` = '$did';";
		$r1=mysqli_query($conn,$q1);
		header('location:removedoctor.php');
	}
?>
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
			  if(did=="")
              {
                document.getElementById("fn1").innerHTML="Please enter existing Doctor's Identification Number.";
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
	    <label for="did">DOCTORS IDENTIFICATION NUMBER</label>
        <input type="text" class="in" id="did" name="did" style="color:black;">
        <p id="fn1" class="in" style="color:red;">*</p><br><br>
			
		<button type="buttton" class="button" name="add">SUBMIT</button><br>
	</form>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <span style="float:left">Quicko Hospital,Block 7,Ziva Apartments,Panajim Goa</span>
        <span style="float:right">Contact us:supportus@quicko.in|call @+919056784356</span>
    </footer>
  </body>
</html>
