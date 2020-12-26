<!DOCTYPE html>
<html>
  <head>
    <title>Available Appointments Page</title>
    <style>
      body{
          margin: 0px;
      }
      h1,tr,caption{
        text-align: center;
        color:maroon;
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
      table{
        border:5px solid #0f3057;
        padding: 5px 3px;
      }
	  .st,th{
	    background-color: #ffbb91;
	    color: blue;
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
	  .speciality{
		  margin-left:1400px;
	  }
    </style>
  </head>
  <body style="background-color:powderblue;">
    <header>
        <span style="float:left;padding-top:15px;">Appointment Booking System</span>
        <span style="float:right;background-color:#ffbb91;"><img src="mylogo.png" align="right" style="width:60px;height:60px;"></span>
    </header>
	<br><br><br><br>
	<div class="cen">
       <table  width = "60%" border = "2" cellspacing = "2" cellpadding = "1" align="center">
	       <caption>Appointment schedule</caption>
  	       <tr>
  	 	        <div class="st">
  	 	            <th>IDENTIFICATION NUMBER</th>
  	 	            <th>NAME</th>
  	 	            <th>DAY</th>
  	 	            <th>OPENING TIME</th>
  	 	            <th>CLOSING TIME</th>
					<th>SPECIALITY</th>
  	            </div>
  	        </tr>

           <?php
				$conn=mysqli_connect("localhost","root","","appointments");
				$q="SELECT * FROM `doctor`";
				$query=mysqli_query($conn, $q) or die( mysqli_error($conn));
				while($res=mysqli_fetch_array($query)){
			?>

            <tr class="tab">
                <div><td><?php echo $res['D_ID']; ?></td></div>
                <div><td><?php echo $res['Name']; ?></td></div>
                <div><td><?php echo $res['Day']; ?></td></div>
				<div><td><?php echo $res['Opening_Time']; ?></td></div>
				<div><td><?php echo $res['Closing_Time']; ?></td></div>
				<div><td><?php echo $res['Speciality']; ?></td></div>
            </tr>

			<?php
			}
			?>
		</table>
    </div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="speciality">
	    <a href="search.php"><button type="buttton" class="button" name="search">SEARCH BY SPECIALITY</button></a>
	</div>
	<br><br>
	<a href="slotbooking.php" >BOOK YOUR SLOT</a><br><br>
    <a href="welcome_page.html" >PREVIOUS</a>
    <br>
    <footer>
        <span style="float:left">Quicko Hospital,Block 7,Ziva Apartments,Panajim Goa</span>
        <span style="float:right">Contact us:supportus@quicko.in|call @+919056784356</span>
    </footer>
  </body>
</html>
