<?php
require 'dbh.php';
if(isset($_POST['addm']))
   {
    $iname = $_POST['dname'];
    $iprice = $_POST['dprice'];
    $idesc = $_POST['ddesc'];
    $itype = $_POST['dtype'];
    $icat = $_POST['dcat'];

    $sql = "INSERT INTO menu (itemname, itemprice, itemdesc, itemtype, itemcat, status) VALUES (?, ?, ?, ?, ?, 0)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) 
    {
      header("Location: ../admin.php?error=sqlerror");
      exit();
      
    }
    else
    {
      mysqli_stmt_bind_param($stmt, "sisss", $iname, $iprice, $idesc, $itype, $icat);
      mysqli_stmt_execute($stmt);
      header("Location: ../admin.php?iteminsert=success");
      exit();
    }
   }