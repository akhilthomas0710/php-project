<?php
session_start();
if(isset($_SESSION['admin']))
{
	$admin = $_SESSION['admin'];
	//header("Location: ../login.php");
}
else if(!isset($_SESSION['admin']))
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
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="../scripts/jquery.waterwheelCarousel.setup.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Manager Details</title>
</head>
<body id="top">
<form id="form1" name="form1" method="post" action="addmanager.php" onsubmit="">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Royal Sports </a></h1>
      <p>The Complete Sports Shop </p>
    </div>
    <div class="fl_right" align="right"><font color="#009900"> Logged in as <?php echo strtoupper($admin);?></font>
	<font color="#FFFFFF">|<a href="adminlogout.php"><font color="#FF0000">Logout</font></a></font></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="adminhome.php">Home</a></li>
        <li><a href="addmanagerform.php">Add Managers </a></li>
        <li class="active"><a href="viewmanagerdetails.php">Manager Details </a></li>
        <li><a href="viewstock.php">Stock Details</a></li>
		<li><a href="viewsalesreport.php">Sales Report</a></li>
		<li><a href="editstoredetails.php">Edit Store Details</a></li>
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

<?php
$tcolor=0;
$conn=mysqli_connect("localhost","root","","inventory system");
//mysql_select_db("inventory system");

$sql ="SELECT * FROM managers";
$result=mysqli_query($conn, $sql);
?>
<table align="center" width="50px" height="102px" border="1" bgcolor="#562051">
<thead>
<tr align="center" bgcolor="#990066"><td align="center" style="color:#FFFFFF" colspan="11"><h1>MANAGER DETAILS</h1></td></tr>
	<th>Name</th><th>Address</th><th>Contact No</th><th>Gender</th><th>Date of Birth</th><th>Email Id</th><th>Qualification</th>
	<th>Username</th><th>Password</th><th>Manager Category</th><th>Edit/Delete</th>
</thead>
<?php
while($row =  mysqli_fetch_assoc($result))
{
?>
<tr align="center" class="<?php if($tcolor == 0)
									{
										echo "dark";
										$tcolor = 1;
									}
									else
									{
										echo "light";
										$tcolor = 0;
									}?>">

	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['contactno'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['DOB'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['qualification'];?></td>
	<td><?php echo $row['uname'];?></td>
	<td><?php echo $row['pword'];?></td>
	<td><?php echo $row['status'];?></td>
	<td><a href="editmanagerdetails.php?id=<?php echo $row['id'];?>"><font color="#9900CC">Edit</font></a>
		<a href="deletemanagerdetails.php?id=<?php echo $row['id'];?>"><font color="#9900CC">/Delete</font></a></td>
</tr>
<?php
}
?>		
</table>
</div>
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
</form>
</body>
</html>
