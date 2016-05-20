<?php
session_start();
if(isset($_SESSION['salesmanager']))
{
	$salesmanager = $_SESSION['salesmanager'];
	//header("Location: ../login.php");
}
else if(!isset($_SESSION['salesmanager']))
{
	header("Location: ../login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<style type="text/css">
.c{color:#FF0000;}
</style>
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.setup.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Stock Details</title>
</head>
<body id="top">
<!--<form id="form1" name="form1" method="post" action="additem.php" onsubmit="return validate_items();">-->
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Royal Sports </a></h1>
      <p>The Complete Sports Shop </p>
    </div>
    <div class="fl_right" align="right"><font color="#009900"> Logged in as <?php echo strtoupper($salesmanager);?></font>
   <font color="#FFFFFF">|</font><a href="salesmanagerlogout.php"><font color="#FF0000">Logout</font></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="salesmanagerhome.php">Sales Manager Home</a></li>
        <!--<li><a href="items.php">Add Item</a></li>-->
        <li class="active"><a href="viewitem.php">View Stock Details</a></li>
		<!--<li><a href="categories.php">Add Item Category</a></li>-->
		<li><a href="itemtopurchase.php">Add Items to Purchase</a></li>
		<li><a href="viewsalesreport.php">View Sales Report</a></li>
        <li><a href="#">Settings</a>
          <ul>
            <li><a href="changeusernameform.php">Change Username</a></li>
            <li><a href="changepasswordform.php">Change Password</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
 <div id="waterwheelCarousel">
    <img  src="../images/Images/images (1).jpg"  width="270pix" height="190pix"alt="" />
    <img src="../images/Images/images (2).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (3).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (5).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (6).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/download (1).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/download.jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (16).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (21).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (8).jpg" width="270pix" height="190pix" alt="" />
    <img src="../images/Images/images (19).jpg" width="270pix" height="190pix" alt="" />
  </div>
</div>
<!-- ####################################################################################################### -->

<div class="wrapper col4" align="center">
	
    	<table  border="1" align="center" style="width:60%">
		<thead>
		<tr align="center" bgcolor="#990066"><td colspan="5" align="center" style="color:#FFFFFF"><h1>STOCK DETAILS</h1></td></tr>
		<th width="16%">Item Id</th>
		<th width="16%">Item Name</th>
		<th width="18%">Item Category</th>
		<th width="23%">Selling Price</th>
		<th width="23%">Available Stock</th>
		</thead>
		<?php
		$tcolor=0;
		mysql_connect("localhost","root","");
		mysql_select_db("inventory system");
		$sql = mysql_query("SELECT * FROM purchase");
		while($row = mysql_fetch_array($sql))
		{
		?>
		<tr align="center" class="<?php if($tcolor==0)
											{
												echo "dark";
												$tcolor=1;
											}
										else
											{
												echo "light";
												$tcolor=0;
											}?>">
		
			<td><?php echo $row['itemid'];?></td>
			<td><?php echo $row['itemname'];?></td>
			<td><?php echo $row['itemcategory'];?></td>
			<td><?php echo $row['sellingprice']." Rs/-";?></td>
			<td><?php echo $row['quantity'];?></td>
			<!--<td><form id="edititem" name="edititem" action="edititem.php" method="get">
				<input type="hidden" value="<?php echo $row['id'];?>" id="id" name="id"/>
				<input type="submit" value="Edit" />
				</form></td>
			<td colspan="2"><form id="deleteitem" name="deleteitem" action="deleteitem.php" method="get">
				<input type="hidden" value="<?php echo $row['id'];?>" id="id" name="id"/>
				<input type="submit" value="Delete" />
				</form></td>-->
		</tr>
		<?php
		}
		?>
  </table>
</div>
  <p align="center">&nbsp;</p>
  

<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      
        <li class="last">&nbsp;<br />&nbsp;&nbsp;</li>
      </ul>
    </div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3"></div>
<!--</form>-->
</body>
</html>
