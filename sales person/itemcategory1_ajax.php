<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$itemid1=$_GET["itemid1"];
//$itemid="FB101";
//echo $itemid;
mysql_connect("localhost","root","");
mysql_select_db("inventory system");
$sql = mysql_query("SELECT itemcategory FROM purchase WHERE itemid='$itemid1'");
$row = mysql_fetch_array($sql);
?>

<input type="text" name="category1" id="category1" value="<?php echo $row['itemcategory'];?>" />
</body>
</html>
