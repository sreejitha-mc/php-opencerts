<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/regstyle.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Registration Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="reg_action.php" method="post">
                    <input class="text" type="text" name="Name" placeholder="name" required=""></br>
                    <input class="text" type="text" name="Batch" placeholder="Batach" required=""></br>
                    <input class="text" type="text" name="Branch" placeholder="Branch" required="" list= "drop">
					<datalist id="drop">
						<option value="Computer Science And Engineering">
						<option value="Civil Engineering">
						<option value="Mechanical Engineering">
						<option value="Electrical Engineering">
						<option value="Electronics and Communication Engineering">


					</datalist>
					
					</br>
                    <input class="text" type="text" name="University_regno" placeholder="University Registration Number" required=""></br>
                    DOB: <input class="text" type="date" name="dob" placeholder="yyyy/mm/dd" max ="<?php echo date("Y-m-d"); ?>" required="">
                    <input class="text email" type="email" name="email" placeholder="Email" required="">
                    <input class="text" type="text" name="phone" placeholder="10 Digit phone" pattern="[0-9]{10}" required=""></br>
                    <input class="text" type="text" name="adr" placeholder="Address" required=""></br>
					
					
					<div class="wthree-text">
						
						<div class="clear"> </div>
					</div>
					<input type="submit" value="Register">
					
				</form>
				
				<a href="http://localhost/startmin/pages/login.php">Home</a>
			</div>
		</div>
		<!-- copyright -->
		
		<!-- //copyright -->
		
	</div>
	<!-- //main -->
</body>
</html>