<?php
	session_start();
?>
<!DOCTYPE html>

<html lang="en">  <!-- Necessary for Bootstrap -->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1">	<!-- Necessary for Bootstrap -->

	<link rel="stylesheet" type="text/css" href="resto.css">

	<!--To add a favicon, i.e. image in title bar, we have the following two lines of code-->
	<title>&#2360;&#x094D;&#2357;&#x093E;&#x0926; on Wheels</title>
    <link rel='shortcut icon' type='image/x-icon' href='swadonwheels.png' />

	<!--For bootsrap including CDN-->
				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

				<!-- jQuery library -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

				<!-- Popper JS -->
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

				<!-- Latest compiled JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	
	<!-- For Google, facebook,youtube, etc. stickers -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		/* Full-width input fields */
		input[type=text], input[type=password] {
  			width: 80%;
  			padding: 12px 45px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			box-sizing: border-box;
  			align-self: center;
		}

		/* Extra styles for the cancel button */
		.cancelbtn {
  			width: auto;
  			padding: 10px 18px;
  			background-color: #f44336;
  			float: left;
		}
		.cancelbtn:hover {
  opacity: 0.8;
}

		/* Center the image and position the close button */
		.imgcontainer {
  			text-align: center;
  			margin: 0;
  			position: relative;
  			/*background-color: #b3ffd9;*/
  			/*background: -webkit-linear-gradient(right, #ccf2ff, #66d9ff); */
  			background: -webkit-linear-gradient(right, #ffff99, #ffff66); 
		}

		img.avatar {
  			width: 15%;
  			border-radius: 50%;
  			padding-top: 10px;
		}

		.bt {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 35%;
}

.bt:hover {
  opacity: 0.8;
}

.uicon{
	background-image:url('uicon.jpg');
    background-repeat:no-repeat;
     padding:15px;
   background-position:left; 
}
.picon{
	background-image:url('picon1.png');
    background-repeat:no-repeat;
     padding:15px;
   background-position:left; 
}


        .container {
			padding: 16px;

			/*background: -webkit-linear-gradient(right, #ffb3ff, #cc99ff); 
			background: -webkit-linear-gradient(right, #ccf2ff, #66d9ff); */
			background: -webkit-linear-gradient(right, #ffff99, #ffff66); 
    		text-align: center;

		}

		span.psw {
  			float: right;
  			padding-top: 16px;
		}

		/* The Modal (background) */
		.modal {
  			display: none; /* Hidden by default */
  			position: fixed; /* Stay in place */
  			z-index: 1; /* Sit on top */
  			left: 0;
  			top: 0;
  			width: 100%; /* Full width */
  			height: 100%; /* Full height */
  			overflow: auto; /* Enable scroll if needed */
  			background-color: rgb(0,0,0); /* Fallback color */
  			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  			padding-top: 60px;
		}

		/* Modal Content/Box */
	.modal-content {
  		background-color: #fefefe;
  		margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  		border: 1px solid #888;
  		width: 40%; /* Could be more or less, depending on screen size */
	}
.modal-content-s {
  		background-color: #fefefe;
  		margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  		border: 1px solid #888;
  		width: 70%; /* Could be more or less, depending on screen size */
	}

	/* The Close Button (x) */
	.close {
  		position: absolute;
  		right: 25px;
  		top: 0;
  		color: #000;
  		font-size: 35px;
  		font-weight: bold;
	}

	.close:hover,
	.close:focus {
  		color: red;
  		cursor: pointer;
	}

	/* Add Zoom Animation */
	.animate {
  		-webkit-animation: animatezoom 0.6s;
  		animation: animatezoom 0.6s
	}

	@-webkit-keyframes animatezoom {
  		from {-webkit-transform: scale(0)} 
  		to {-webkit-transform: scale(1)}
	}
  
	@keyframes animatezoom {
  		from {transform: scale(0)} 
  		to {transform: scale(1)}
	}

	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 300px) {
  		span.psw {
     		display: block;
     		float: none;
  		}
  		.cancelbtn {
     		width: 100%;
  		}
	}

	</style>
	
</head>


<body onload="myFunction()">
    <header>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-dark bg-secondary sticky-top">
		<!-- In the above class
			navbar-light enables text color to be black
			navbar-dark would make it white
			bg-light makes the background color white
			bg-warning makes the background color yellow
			bg-secondary makes the background color grey
		-->
	 <div class="container-fluid">  <!--This is for 100% width -->
	 	<a class="navbar-brand" href="#" style="float: left;"><img src="swadonwheels.png" width=90px height=90px></a>
	 	<h1 class="display-3 text-warning " style="padding-left: 110px; position: absolute;"><b>&#2360;&#x094D;&#2357;&#x093E;&#x0926;</b><em> on Wheels </em></h1>
	 	<div class="text-right">
	 		<button type="button" class="btn btn-outline-warning btn-lg" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

	 			<div id="id01" class="modal">
  
  <form name=f1 class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avataro.png" alt="Avatar" class="avatar" width=120 height=90>
    </div>

    <div class="container">

<!--<form name=f1 method=post action=test5.php>
<input type=text name=name value='plus2net'>-->

<br>
      <label for="uname"><b>Username </b></label>
      <input type="text" placeholder="Enter Username" name="uname" class="uicon" required>
      <br>
      <label for="psw"><b>Password </b></label>
      <input type="password" placeholder="Enter Password" name="psw" class="picon" required>

        
      <button type="submit" class="bt" name="alogin-submit" onclick="f1.action='includes/alogin.php';  return true;">Login as Admin</button>
      <button type="submit" class="bt" name="ulogin-submit" onclick="f1.action='includes/ulogin.php';  return true;">Login as User</button>

      
      <!--<label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> -->

<!--<input type='submit' value='Admin' onclick="f1.action='includes/alogin.php';  return true;">
<input type='submit' value='User' onclick="f1.action='includes/ulogin.php';  return true;">
<br>-->


    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




















			<button type="button" class="btn btn-outline-warning btn-lg" onclick="document.getElementById('id02').style.display='block'" style="width:auto; position:relative; margin-left: 20px;">Signup</button>

			<div id="id02" class="modal">
  
  <form name=f2 class="modal-content-s animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avataro.png" alt="Avatar" class="avatar" width=120 height=120>
    </div>

    <div class="container">
      <label for="suname"><b>Name </b></label>
      <input type="text" placeholder="Enter Name" name="suname" class="uicon" required>
      <br>
      <label for="semail"><b>E-mail(username) </b></label>
      <input type="text" placeholder="Enter E-mail" name="semail" class="uicon" required>
      <br>
      <label for="sphone"><b>Contact No. </b></label>
      <input type="text" placeholder="Enter Contact No." name="sphone" class="uicon" required>
      <br>
      <label for="saddress" style="float: left; padding-left: 20px;"><b>Address </b></label>
      <!--<input type="text" placeholder="Enter Address" name="sphone" class="uicon" required>-->

      <textarea name="saddress" rows="2" cols="120" placeholder="Enter Address" required></textarea>
      <br>
      <label for="psw"><b>Password </b></label>
      <input type="password" placeholder="Enter Password" name="spsw" class="picon" required>
      <label for="cpsw"><b>Confirm Password </b></label>
      <input type="password" placeholder="Enter Password again" name="scpsw" class="picon" required>
        
      <button type="submit" class="bt" name="asignup-submit" onclick="f2.action='includes/asignup.php';  return true;">Signup as Admin</button>
      <button type="submit" class="bt" name="usignup-submit" onclick="f2.action='includes/usignup.php';  return true;">Signup as User</button>
      <!--<button type="submit" class="bt">Signup</button>-->

      <!--<label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> -->
    </div>

   <!-- <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>-->
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>











        	<!--<button type="button" class="btn btn-outline-warning btn-lg" style="position:relative; float: right; margin-left: 20px;"> Logout
          		<i class="fa fa-cart-plus"></i> Cart
        	</button> -->
    	</div>
		
	 </div>
	</nav>



    </header>

