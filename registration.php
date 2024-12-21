<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>CareerCruise.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons CSS -->

	<!-- side nav css file -->
	<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
	<!-- side nav css file -->

	<!-- js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts-->

	<!-- Metis Menu -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->

</head>

<body class="cbp-spmenu-push">
	<div class="main-content">

		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">SignUp Here</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Personal Information :</h5>
					<form method="post" enctype="multipart/form-data">
						<div class="sign-u">
							<input type="text" name="stud_name" placeholder="Enter Your Name" pattern="[A-Za-z]{1,32}">
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<input type="text" name="stud_contact" placeholder="Enter Your Contact" pattern="[789][0-9]{9}">
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<input type="email" name="stud_email" placeholder="Enter Your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<input type="date" name="stud_dob">
							<div class="clearfix"> </div>
						</div>
						<br>
						<div class="sign-u">
							<input type="text" name="stud_username" placeholder="Enter Your Username">
							<div class="clearfix"> </div>
						</div>


						<div class="sign-u">
							<input type="password" name="stud_password" placeholder="Password" required="">
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<textarea name="stud_address" placeholder="Enter Your Address" cols="47"></textarea>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<select name="std_city">
								<option value="">Select City</option>
								<option value="Nashik">Nashik</option>
								<option value="Pune">Pune</option>
								<option value="Mumbai">Mumbai</option>
							</select>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Gender* :</h4>
							</div>
							<div class="sign-up2">
								<label>
									<input type="radio" name="gender" value="male">
									Male
								</label>
								<label>
									<input type="radio" name="gender" value="female">
									Female
								</label>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Language :</h4>
							</div>
							<div class="sign-up2">
								<input type="checkbox" name="lang[]" value="English">English
								<input type="checkbox" name="lang[]" value="Hindi">Hindi
								<input type="checkbox" name="lang[]" value="Marathi">Marathi
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">

							<input type="file" name="photo" required="">
							<div class="clearfix"> </div>
						</div>


						<!-- <div class="sub_home">
							<input type="submit" name="submit" value="Submit">
							
							<div class="clearfix"> </div>
						</div> -->

						<div class="flex items-center justify-between">
                <button type="submit" name="btn_submit" value="Sign In" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"  >
                    Submit Application
                </button>
            </div>

						<div class="registration">
							Already Registered.
							<a class="" href="index.php">
								Login
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		<!--	<p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
		</div>
		//footer-->
	</div>

	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
		$('.sidebar-menu').SidebarNav()
	</script>
	<!-- //side nav js -->

	<!-- Classie --><!-- for toggle left push menu script -->
	<script src="js/classie.js"></script>
	<script>
		var menuLeft = document.getElementById('cbp-spmenu-s1'),
			showLeftPush = document.getElementById('showLeftPush'),
			body = document.body;

		showLeftPush.onclick = function() {
			classie.toggle(this, 'active');
			classie.toggle(body, 'cbp-spmenu-push-toright');
			classie.toggle(menuLeft, 'cbp-spmenu-open');
			disableOther('showLeftPush');
		};

		function disableOther(button) {
			if (button !== 'showLeftPush') {
				classie.toggle(showLeftPush, 'disabled');
			}
		}
	</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>

</body>

</html>
<?php

include "config.php";


if (isset($_POST['submit'])) 
{
	extract($_POST);

	$language = implode(',', $_POST['lang']);
	$name = $_FILES['photo']['name'];
	$type = $_FILES['photo']['type'];
	$size = $_FILES['photo']['size'];
	$temp = $_FILES['photo']['tmp_name'];
	if ($name) {

		// $upload = "upload/";
		$imgExt = strtolower(pathinfo($name, PATHINFO_EXTENSION));
		$valid_ext = array('jpg', 'png', 'jpeg');
		$photo = rand(1000, 1000000) . "." . $imgExt;
		// move_uploaded_file($temp, $upload . $photo);
	}

	$add = mysqli_query($conn, "insert into registration (name,contact,email,dob,userid,password,address,city,gender,language,photo)
	values ('$stud_name','$stud_contact','$stud_email','$stud_dob','$stud_username','$stud_password','$stud_address','$std_city','$gender','$language','$photo')") or die(mysqli_error($conn));

	if ($add) {
		echo "<script>;";
		echo "window.alert('Data insert successfully....!');";
		echo 'window.location.href = "LoginUser.php";';
		echo "</script>";
	} else {
		echo "<script>;";
		echo "window.alert('Data error....!');";
		echo "</script>";
	}
}

?>