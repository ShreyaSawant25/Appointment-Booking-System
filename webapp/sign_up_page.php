<?php
    include 'conn.php';
	if(isset($_POST['submit']))
	{
		$conn=mysqli_connect("localhost","root","","appointments");
		$uname=$_POST["uname"];
		$fname=$_POST["fname"];
		$mname=$_POST["mname"];
		$lname=$_POST["lname"];
		$dob=$_POST["dob"];
		$phone=$_POST["phone"];
		$hpa=$_POST["hpa"];
		$gender=$_POST["gender"];
		$address=$_POST["address"];
		$adharno=$_POST["adharno"];
		$mstatus=$_POST["mstatus"];
		$email=$_POST["email"];
		$pass=$_POST["pass"];
		$q1="insert into users values('$uname','$fname','$mname','$lname','$dob','$phone','$hpa','$gender','$address','$adharno','$mstatus','$email','$pass');";
		$r1=mysqli_query($conn,$q1);
		header('location:welcome_page.html');
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sign_up_page</title>
    <script src="sign_up.js">
    </script>

    <style>
      body{
        background-color:#f1fcfc;
        color:#133b5c;
        size:50px;
        margin: 0px;
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
      h1{
        text-align:center;
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

      input,p{
        display: inline;
      }
    </style>
  </head>
  <body>
    <header>
        <span style="float:left;padding-top:15px;">Appointment Booking System</span>
        <span style="float:right;background-color:#ffbb91;"><img src="mylogo.png" align="right" style="width:60px;height:60px;"></span>
    </header>
    <div>
      <h1>Quickly Signup to Get Started</h1><br>
      <form align="center" method="post" onsubmit=" return validate()" value="Reset form">
	    <label for="uname">USER NAME</label>
        <input type="text" id="uname" name="uname" style="color:black;">
        <p id="fn14" style="color:red;">*</p><p id="fn15">Ex:Qui123qw</p><br><br>
	  
        <label for="fname">FIRST NAME</label>
        <input type="text" id="fname" name="fname" style="color:black;">
        <p id="fn1" style="color:red;">*</p><br><br>

        <label for="mname">MIDDLE NAME</label>
        <input type="text" id="mname" name="mname" style="color:black;">
        <p id="fn2" style="color:red;">*</p><br><br>

        <label for="lname">LAST NAME</label>
        <input type="text" id="lname" name="lname" style="color:black;">
        <p id="fn3" style="color:red;">*</p><br><br>

        <label for="dob">DATE OF BIRTH</label>
        <input type="date" id="dob" name="dob">
        <p id="fn4" style="color:red;">*</p><br><br>

        <label for="phone">PHONE NUMBER:</label>
        <input type="tel" id="phone" name="phone">
        <p id="fn5" style="color:red;">*</p><br><br>

        <label>HAVE ANY OF THESE PROBLEM RECENTLY?</label>
        <p id="fn6" style="color:red;">*</p><br>
        <input type="checkbox" id="hpa1" name="hpa" value="cold">
        <label for="hpa1"> Cold</label><br>
        <input type="checkbox" id="hpa2" name="hpa" value="fever">
        <label for="hpa2">Fever</label><br>
        <input type="checkbox" id="hpa3" name="hpa" value="nts">
        <label for="hpa2">Nothing more to specify</label><br><br>

        <label>GENDER</label>
        <select id="gender" name="gender">
           <option value=""></option>
           <option value="male">Male</option>
           <option value="female">Female</option>
           <option value="others">Others</option>
        </select>
        <p id="fn7" style="color:red;">*</p><br><br><br>

        <label for="address">ADDRESS</label>
        <textarea id="address" name="address" rows="3" cols="10"></textarea>
        <p id="fn8" style="color:red;">*</p><br><br>

        <label for="adharno">AADHAR CARD NUMBER(7 digits)</label>
        <input type="text" id="adharno" name="adharno">
        <p id="fn9" style="color:red;">*</p><br><br>

        <label>MARITAL STATUS</label>
        <p id="fn10" style="color:red;">*</p><br>
        <span>
          <input type="radio" id="married" name="mstatus" value="Married">
          <label for="married">Married</label>
          <input type="radio" id="unmarried" name="mstatus" value="Unmarried">
          <label for="unmarried">Unmarried</label>
        </span>
        <br><br>

        <label for="email">EMAIL ID</label>
        <input type="text" id="email" name="email">
        <p id="fn11" style="color:red;">*</p><br><br>

        <label for="pass">PASSWORD</label>
        <input type="password" id="pass" name="pass">
        <p id="fn12" style="color:red;">*</p><br><br>

        <label for="repass">CONFIRM PASSWORD</label>
        <input type="password" id="repass" name="repass">
        <p id="fn13" style="color:red;">*</p><br><br><br><br>
        <button type="buttton" class="button" name="submit">PROCEED</button><br>
      </form>
      <br><br><br><br>
      <a href="index.html">Return to previous page</a>
      <br><br><br><br><br>
    </div>
    <footer>
        <span style="float:left">Quicko Hospital,Block 7,Ziva Apartments,Panajim Goa</span>
        <span style="float:right">Contact us:supportus@quicko.in|call @+919056784356</span>
    </footer>
  </body>
</html>
