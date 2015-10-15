<?php
require_once ('phplib/populator.php');
initdb();
session_start();
$sid=$_SESSION[sid];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Common Page :::::::: Zakir</title>
<link rel = "stylesheet" type = "text/css" href = "ExpreStyle.css" />
</head>

<body>
<center>
<table width="760" border="0">
  <tr>
    <td><img src="imgs/banner.jpg" height="100" width="760" /></td>
  </tr>
  <tr>
    <td>
	<table width="760" border="0">
      <tr>
        <td width="70" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'"><a href="home.php">Home</a></td>
        <td width="70" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'"><a href="login.php">Login</a></td>
        <td width="70" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'"><a href="join.php">Join Us</a></td>
        <td width="70" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'"><a href="logout.php">Log Out</a></td>
        <td width="70" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'"><a href="about.php">About Us</a></td>
        <td width="70" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'">&nbsp;</td>
      </tr>
    </table>
	</td>
  </tr>
  <tr>
    <td>
	<?php
	extract($_POST);
	if($mo==$paymon) $fine=0;
	else $fine=50;
	$pdate=$ya.'-'.$mo.'-'.$da;
	$Q="INSERT INTO `tution_book` ( `student_id` , `admission_fee` , `monthly_fee` , `session_fee` , `library_fee` , `other_fee` , `payment_date` , `payment_month`, `fine` ) VALUES ('$sid', '$adfe', '$monfe', '$sesfe', '$libfe', '$othfe', '$pdate', '$paymon', '$fine')";
	$R=mysql_query($Q) or die("Can't execute query ".mysql_error());
	?>
	<p>Click here to <a href="login.php">add another tution</a></p>
	</td>
  </tr>
</table>
</center>
</body>
</html>
