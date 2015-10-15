<?php
require_once ('phplib/populator.php');
initdb();
session_start();

$query="select pass from studentinfo where student_id='{$_POST[reg]}'";
$result=mysql_query($query) or die("Can't execute query ".mysql_error());

$p=trim($_POST['pass']);

while( $line = mysql_fetch_array($result, MYSQL_ASSOC) ){
	$l = trim( $line['pass'] );
	if( $p==$l ){
		$_SESSION[login] = true;
	}
	else{
		$_SESSION[login] = false;
	}
}

$_SESSION[sid]=$_POST[reg];

$sid=$_SESSION[sid];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>login confirmation Page :::::::: Zakir</title>
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
        <td width="70" class="MOut" onmouseover="this.className='MOver'" onmouseout="this.className='MOut'"><a href="start.php">Home</a></td>
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
    <td align="left" bgcolor="#608ca9">
	<?php
	if( $_SESSION[login]==false ) die("Login is unsuccessful try logging in again");
	else echo "log in is successful for Student ID: $sid";
	?>
	<p>Enter Payment</p><br />
	<form id="form1" name="form1" method="post" action="pay_post.php">
	  <table width="90%" border="0" cellspacing="0" cellpadding="0" class="textformtable">
        <tr>
          <td width="18%">Student ID: </td>
          <td width="82%"><?php echo $sid; ?></td>
        </tr>
        <tr>
          <td>Admission Fee: </td>
          <td><input type="text" name="adfe" /></td>
        </tr>
        <tr>
          <td>Monthly Fee: </td>
          <td><input type="text" name="monfe" /></td>
        </tr>
        <tr>
          <td>Session Fee: </td>
          <td><input type="text" name="sesfe" /></td>
        </tr>
        <tr>
          <td>Library Fee: </td>
          <td><input type="text" name="libfe" /></td>
        </tr>
        <tr>
          <td>Other Fee: </td>
          <td><input type="text" name="othfe" /></td>
        </tr>
        <tr>
          <td>Payment Date: </td>
          <td><?php echo enterdatecombo("ya", "mo", "da"); ?></td>
        </tr>
        <tr>
          <td>Payment Month: </td>
          <td><input type="text" name="paymon" /> as number</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="reset" name="Reset" value="Reset" />
              <input type="submit" name="Submit" value="Submit" /></td>
        </tr>
      </table>
	  </form>
	</td>
  </tr>
</table>
</center>
</body>
</html>
