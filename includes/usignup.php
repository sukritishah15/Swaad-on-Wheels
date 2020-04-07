<?php
 if(isset($_POST['usignup-submit'])){

 	require 'dbh.php';

 	$uname = $_POST['suname'];
 	$email = $_POST['semail'];
 	$phone = $_POST['sphone'];
 	$address = $_POST['saddress'];
 	$password = $_POST['spsw'];
 	$cpassword = $_POST['scpsw'];

 	if (empty($uname) || empty($email) || empty($phone) || empty($address) || empty($password) || empty($cpassword))
 	{
 		header("Location: ../index.php?error=emptyfields&uid=".$uname."&email=".$email);
 		exit();
 	}
 	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z]*$/", $uname))
 	{
 		header("Location: ../index.php?error=invalidmailuid");
 		exit();
 	}
 	else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
 	{
 		header("Location: ../index.php?error=invalidmail&uid=".uname);
 		exit();
 	}
 	else if (!preg_match("/^[a-zA-Z]*$/", $uname))
 	{
 		header("Location: ../index.php?error=invaliduid&mail=".email);
 		exit();
 	}
 	else if ($password !== $cpassword) 
 	{
 		header("Location: ../index.php?error=passwordcheck&uid=".$uname."&email=".$email);
 		exit();
 	}
 	else 
 	{
 		$sql = "INSERT INTO users (uname, uemail, uphone, uaddress, upwd) VALUES (?, ?, ?, ?, ?)";
 		$stmt = mysqli_stmt_init($conn);
 		if (!mysqli_stmt_prepare($stmt,$sql)) 
 		{
 			header("Location: ../index.php?error=sqlerror");
 			exit();
 		}
 		else
 		{
 			$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
 			mysqli_stmt_bind_param($stmt, "ssiss", $uname, $email, $phone, $address, $hashedPwd);
 			mysqli_stmt_execute($stmt);
 			header("Location: ../user.php?signup=success");
 			exit();
 		}
 	}
 	mysqli_stmt_close($stmt);
 	mysqli_close($conn);
 }
 else
 {
 	header("Location: ../index.php");
 	exit();
 }

