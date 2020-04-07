<?php
require 'dbh.php';
session_start();
/*$max = sizeof($_SESSION['itemid']);
for($i=0; $i<$max; $i++)
{*/ 
 // if(isset($_POST['addtoo']))
   {
    /*$iname = $_POST['dname'];
    $iprice = $_POST['dprice'];
    $idesc = $_POST['ddesc'];
    $itype = $_POST['dtype'];
    $icat = $_POST['dcat'];*/
    $cuid = $_SESSION['userId'];
    $odid = $_GET['odd'];
    $a = $_GET['p']
    /*[$i]*/;
    //echo $iteid;
    $sql = "INSERT INTO payment (cidd, oidd, da, tim, pmode, amt) VALUES (?, ?, now(), now(), 'Card', ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) 
    {
      header("Location: ../user.php?error=sqlerror");
      exit();
      //echo "err";
      
    }
    else
    {
      mysqli_stmt_bind_param($stmt, "iii", $cuid, $odid, $a);
      mysqli_stmt_execute($stmt);
      header("Location: ../user.php?iteminsert=success");
      exit();
      //echo "s";
    }
   }
//}