<!DOCTYPE html>
<html>
<head>
<style>
   body{
        background-color:#f1fcfc;
        color:#133b5c;
        size:50px;
        margin: 0px;
      }
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
</style>
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
		<li><a href="updatedetails.php">UPDATE DETAILS</a></li>
        <li><a href="admin_login.html">LOGOUT</a></li>
    </ul>
	<img class="image" src="image6.jpg" alt="facilities" height="610px" width="1710px">
    <footer>
        <span style="float:left">Quicko Hospital,Block 7,Ziva Apartments,Panajim Goa</span>
        <span style="float:right">Contact us:supportus@quicko.in|call @+919056784356</span>
    </footer>
</body>
</html>
