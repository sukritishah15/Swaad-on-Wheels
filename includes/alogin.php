<?php
 if(isset($_POST['alogin-submit']))
 {
 	require 'dbh.php';

 	$usname = $_POST['uname'];
 	$passw = $_POST['psw'];

 	if (empty($usname) || empty($passw))
 	{
 		header("Location: ../index.php?error=emptyfields");
 		exit();
 	}
 	else
 	{
 		$sql = "SELECT * FROM admin WHERE uemail=?;";
 		$stmt = mysqli_stmt_init($conn);

 		if(!mysqli_stmt_prepare($stmt,$sql))
 		{
 			header("Location: ../index.php?error=sqlerror");
 			exit();
 		}
 		else
 		{
 			mysqli_stmt_bind_param($stmt, "s", $usname);
 			mysqli_stmt_execute($stmt);
 			$result = mysqli_stmt_get_result($stmt);
 			if ($row = mysqli_fetch_assoc($result))
 			{
 				$pwdCheck = password_verify($passw, $row['upwd']);
 				if($pwdCheck == false)
 				{
 					header("Location: ../index.php?error=wrongpwd");
 					exit();
 				}
 				else if ($pwdCheck == true)
 				{
 					session_start();
 					$_SESSION['userId'] = $row['uid'];
 					$_SESSION['userName'] = $row['uname'];

 					header("Location: ../admin.php?login=success");
 					exit();
 				}
 				else
 				{
 					header("Location: ../index.php?error=wrongpwd");
 					exit();
 				}
 			}
 			else
 			{
 				header("Location: ../index.php?error=nouser");
 				exit();
 			}
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
