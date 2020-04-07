<?php
require 'dbh.php';
session_start();
/*$max = sizeof($_SESSION['itemid']);
for($i=0; $i<$max; $i++)
{*/ 
 // if(isset($_POST['addtoo']))

     $names = array(
    'Christopher',
    'Ryan',
    'Ethan',
    'John',
    'Zoey',
    'Sarah',
    'Michelle',
    'Samantha',
    );
     $random_name = $names[mt_rand(0, sizeof($names) - 1)];
    /*$friends=array("Mike", "Ondrej", "Honza", "Danca", "Misa", "Verca");
    $winner = array_rand($friends, 1);
    $winner_name = strtoupper($friends[$winner]);*/
    /*$iname = $_POST['dname'];
    $iprice = $_POST['dprice'];
    $idesc = $_POST['ddesc'];
    $itype = $_POST['dtype'];
    $icat = $_POST['dcat'];*/
    $cid = $_GET['cdd'];
    $pid = $_GET['pdd'];
    //$a = $_GET['p']
    /*[$i]*/;
    //echo $iteid;
    $sql = "INSERT INTO delivery (ci, pi, d, t, delname) VALUES (?, ?, now(), now(), ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) 
    {
      header("Location: ../admin.php?error=sqlerror");
      exit();
      //echo "err";
      
    }
    else
    {
      mysqli_stmt_bind_param($stmt, "iis", $cid, $pid, $random_name);
      mysqli_stmt_execute($stmt);
      header("Location: ../admin.php?iteminsert=success");
      exit();
      //echo "s";
    }
//}