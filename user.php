<?php
  session_start();
  require 'includes/dbh.php';
?>
<!DOCTYPE html>

<html lang="en">  <!-- Necessary for Bootstrap -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- Necessary for Bootstrap -->
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

li button {
  display: block;
  color: white;
  background-color: #333;
  text-align: center;
  padding:20px 80px;
  text-decoration: none;
  border: none;
}

li button:hover {
  background-color: #111;
}
tr:nth-child(even){
  background-color: #f2f2f2;
}
tr:nth-child(odd){
  background-color: #ccffb3;
}
</style>
</head>



<header>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-dark bg-secondary sticky-top">
		
	 <div class="container-fluid">  <!--This is for 100% width -->
	 	<a class="navbar-brand" href="#" style="float: left;"><img src="swadonwheels.png" width=90px height=90px></a>
	 	<h1 class="display-3 text-warning " style="padding-left: 110px; position: absolute;"><b>&#2360;&#x094D;&#2357;&#x093E;&#x0926;</b><em> on Wheels </em></h1>
	 	<div class="text-right">

             <form action='includes/logout.php' method="post">
        	     <button type="submit" class="btn btn-outline-warning btn-lg" style="position:relative; float: right; margin-left: 20px;"> Logout </button> 
              </form>
        


    </div>
		
	 </div>
	</nav>
</header>

<div style="background-color: #ffff99;">
    <p style="text-align: center; font-size: 40px;"><b>You're signed in!</b></p>

<form name=f3 method="post">
  <ul>
  <li><button type="submit" name="umenu" >View Menu</button></li>
  <li><button type="submit" name="uorder" >View Orders</button></li>
  <!--<li><button type="submit" name="uaorder" >Add Order</button></li>
  <li><button type="submit" name="upay" >Add Payment</button></li>-->
  <li><button type="submit" name="uvpay" >View Payment</button></li>
  <li><button type="submit" name="udel" >View Delivery</button></li>
  <li><button type="submit" name="upd" >Edit Personal details</button></li>
</ul>
</form>

<?php 
if (isset($_POST['umenu'])) {
     /*$iname = $_POST['dname'];
    $iprice = $_POST['dprice'];
    $idesc = $_POST['ddesc'];
    $itype = $_POST['dtype'];
    $icat = $_POST['dcat'];*/

    $sql = "SELECT * FROM menu /*WHERE uemail=?*/;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql))
    {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else
    {
      /*mysqli_stmt_bind_param($stmt, "sisss", $iname, $iprice, $idesc, $itype, $icat);*/
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      echo "<br>";
      echo "<table border='1' style='border-collapse: collapse; width: 100%;'>
      <tr>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Id</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Dish</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Price</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;width: 600px;'>Description</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Type</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Category</th>
      
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;width: 150px;'>Add to Order</th>
      </tr>";
/*<th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;width: 30px;'>Quantity</th>
<td style="text-align: left;padding: 8px;"><input type="text" name="qty" placeholder="qty" style="width: 60px;"></td>*/
      while ($row = mysqli_fetch_assoc($result)) {
        $itid = $row["itemid"];
        $itname = $row["itemname"];
        $itprice = $row["itemprice"];
        $itdesc = $row["itemdesc"];
        $ittype = $row["itemtype"];
        $itcat = $row["itemcat"];
         
        //$_SESSION['itemid']= $itid;
        /*echo '<b>'.$itname.$itprice.'</b><br />';
        echo $itdesc.'<br />';
        echo $ittype.'<br />';
        echo $itcat;*/
/*onclick="fetch($itid)"*/
        echo '<tr>
                  <td style="text-align: left;padding: 8px;">'.$itid.'</td>
                  <td style="text-align: left;padding: 8px;">'.$itname.'</td>
                  <td style="text-align: left;padding: 8px;">'.$itprice.'</td>
                  <td style="text-align: left;padding: 8px;">'.$itdesc.'</td>
                  <td style="text-align: left;padding: 8px;">'.$ittype.'</td>
                  <td style="text-align: left;padding: 8px;">'.$itcat.'</td>          
                  <td><a href="includes/addo.php?idd=';
                  echo $itid;
                 echo'&p=';
                 echo $itprice;
                 echo ' ">Add to Order</a></td>
              </tr>';
        }
        //<form method="post" action="includes/addo.php">
        //<td style="text-align: left;padding: 8px;"><button type="submit" name="addtoo" id="but">Add To Order </button></td>
         //         </form>
        /*function fetch()
        {
          $_SESSION['itemid']= array();
          array_push($_SESSION['itemid'],$itid);
        }*/
      }
      echo "</table>";
      /*function fetch(&$iid)
        {
          /*$_SESSION['itemid']= array();
          array_push($_SESSION['itemid'],$iid);
          $_SESSION['itemid']= $iid;
        }*/
        
//data: data
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
}

      /*if ($row = mysqli_fetch_assoc($result))
      {
        
      }
      else
      {
        header("Location: ../index.php?error=nouser");
        exit();
      }*/
    
   



else if (isset($_POST['uorder'])) {

   $cui = $_SESSION['userId'];
   $sql = "SELECT * FROM orders WHERE cid=?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql))
    {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else
    {
      mysqli_stmt_bind_param($stmt, "i", $cui);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      echo "<br>";
      echo "<table border='1' style='border-collapse: collapse; width: 100%;'>
      <tr>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Customer Id</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Item Id</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Order Id</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;width: 200px;'>Price</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Date</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Time</th>

      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;width: 250px;'>Make Payment </th>
      
      ";
/*<th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;width: 30px;'>Quantity</th>
<td style="text-align: left;padding: 8px;"><input type="text" name="qty" placeholder="qty" style="width: 60px;"></td>*/
      while ($row = mysqli_fetch_assoc($result)) {
        $cidd = $row["cid"];
        $itid = $row["iid"];
        $priceo = $row['pr'];
        $oid = $row["oid"];
        $d = $row["dat"];
        $t = $row["tm"];

        //$_SESSION['itemid']= $itid;
        /*echo '<b>'.$itname.$itprice.'</b><br />';
        echo $itdesc.'<br />';
        echo $ittype.'<br />';
        echo $itcat;*/
/*onclick="fetch($itid)"*/
        echo '<tr>
                  <td style="text-align: left;padding: 8px;">'.$cidd.'</td>
                  <td style="text-align: left;padding: 8px;">'.$itid.'</td>
                  <td style="text-align: left;padding: 8px;">'.$oid.'</td>
                  <td style="text-align: left;padding: 8px;">'.$priceo.'</td>
                  <td style="text-align: left;padding: 8px;">'.$d.'</td>
                  <td style="text-align: left;padding: 8px;">'.$t.'</td> 
                  <td><a href="includes/addp.php?odd=';
                  echo $oid;
                 echo'&p=';
                 echo $priceo;
                 echo ' ">Make Payment</a></td>         
              </tr>';
        }
        //<form method="post" action="includes/addo.php">
        //<td style="text-align: left;padding: 8px;"><button type="submit" name="addtoo" id="but">Add To Order </button></td>
         //         </form>
        /*function fetch()
        {
          $_SESSION['itemid']= array();
          array_push($_SESSION['itemid'],$itid);
        }*/
      }
      echo "</table>";
      /*function fetch(&$iid)
        {
          /*$_SESSION['itemid']= array();
          array_push($_SESSION['itemid'],$iid);
          $_SESSION['itemid']= $iid;
        }*/
        
//data: data
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
}



/*else if (isset($_POST['uaorder'])) {
   echo "hwert11";
}*/

/*else if (isset($_POST['upay'])) {
   echo "hwert2";
}*/

else if (isset($_POST['uvpay'])) {
   $cui = $_SESSION['userId'];
   $sql = "SELECT * FROM payment WHERE cidd=?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql))
    {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else
    {
      mysqli_stmt_bind_param($stmt, "i", $cui);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      echo "<br>";
      echo "<table border='1' style='border-collapse: collapse; width: 100%;'>
      <tr>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Customer Id</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Order Id</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Payment Id</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;width: 200px;'>Mode</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Date</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Time</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Amount</th>
      
      ";
/*<th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;width: 30px;'>Quantity</th>
<td style="text-align: left;padding: 8px;"><input type="text" name="qty" placeholder="qty" style="width: 60px;"></td>*/
      while ($row = mysqli_fetch_assoc($result)) {
        $c = $row["cidd"];
        $o = $row["oidd"];
        $p = $row['pid'];
        $m = $row['pmode'];
        $d = $row["da"];
        $t = $row["tim"];
        $a = $row["amt"];

        //$_SESSION['itemid']= $itid;
        /*echo '<b>'.$itname.$itprice.'</b><br />';
        echo $itdesc.'<br />';
        echo $ittype.'<br />';
        echo $itcat;*/
/*onclick="fetch($itid)"*/
        echo '<tr>
                  <td style="text-align: left;padding: 8px;">'.$c.'</td>
                  <td style="text-align: left;padding: 8px;">'.$o.'</td>
                  <td style="text-align: left;padding: 8px;">'.$p.'</td>
                  <td style="text-align: left;padding: 8px;">'.$m.'</td>
                  <td style="text-align: left;padding: 8px;">'.$d.'</td>
                  <td style="text-align: left;padding: 8px;">'.$t.'</td> 
                  <td style="text-align: left;padding: 8px;">'.$a.'</td>
        
              </tr>';
        }
        //<form method="post" action="includes/addo.php">
        //<td style="text-align: left;padding: 8px;"><button type="submit" name="addtoo" id="but">Add To Order </button></td>
         //         </form>
        /*function fetch()
        {
          $_SESSION['itemid']= array();
          array_push($_SESSION['itemid'],$itid);
        }*/
      }
      echo "</table>";
      /*function fetch(&$iid)
        {
          /*$_SESSION['itemid']= array();
          array_push($_SESSION['itemid'],$iid);
          $_SESSION['itemid']= $iid;
        }*/
        
//data: data
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
}

else if (isset($_POST['udel'])) {
   $cui = $_SESSION['userId'];
   $sql = "SELECT * FROM delivery where ci=?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql))
    {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else
    {
      mysqli_stmt_bind_param($stmt, "i", $cui);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      echo "<br>";
      echo "<table border='1' style='border-collapse: collapse; width: 100%;'>
      <tr>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Customer Id</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Payment Id</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Date Id</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;width: 200px;'>Time</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Delivery Id</th>
      <th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;'>Delivered BY</th>
      
      ";
/*<th style='text-align: left;padding: 8px;background-color: #4CAF50;color: white;width: 30px;'>Quantity</th>
<td style="text-align: left;padding: 8px;"><input type="text" name="qty" placeholder="qty" style="width: 60px;"></td>*/
      while ($row = mysqli_fetch_assoc($result)) {
        $c = $row["ci"];
        $p = $row["pi"];
        $d = $row['d'];
        $t = $row['t'];
        $i = $row["did"];
        $b = $row["delname"];

        //$_SESSION['itemid']= $itid;
        /*echo '<b>'.$itname.$itprice.'</b><br />';
        echo $itdesc.'<br />';
        echo $ittype.'<br />';
        echo $itcat;*/
/*onclick="fetch($itid)"*/
        echo '<tr>
                  <td style="text-align: left;padding: 8px;">'.$c.'</td>
                  <td style="text-align: left;padding: 8px;">'.$p.'</td>
                  <td style="text-align: left;padding: 8px;">'.$d.'</td>
                  <td style="text-align: left;padding: 8px;">'.$t.'</td>
                  <td style="text-align: left;padding: 8px;">'.$i.'</td>
                  <td style="text-align: left;padding: 8px;">'.$b.'</td> 
                  
              </tr>';
        }
        //<form method="post" action="includes/addo.php">
        //<td style="text-align: left;padding: 8px;"><button type="submit" name="addtoo" id="but">Add To Order </button></td>
         //         </form>
        /*function fetch()
        {
          $_SESSION['itemid']= array();
          array_push($_SESSION['itemid'],$itid);
        }*/
      }
      echo "</table>";
      /*function fetch(&$iid)
        {
          /*$_SESSION['itemid']= array();
          array_push($_SESSION['itemid'],$iid);
          $_SESSION['itemid']= $iid;
        }*/
        
//data: data
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
}

else if (isset($_POST['upd'])) {
   echo "hwert4";
}
?>


</div>
