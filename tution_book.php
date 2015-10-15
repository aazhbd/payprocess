<?php
require_once ('phplib/populator.php');
initdb();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tution Book :::::::: Zakir</title>
<link rel = "stylesheet" type = "text/css" href = "ExpreStyle.css" />
</head>

<body>
<center>
<table width="780" border="0">
  <tr>
    <td><img src="imgs/banner.jpg" height="100" width="780" /></td>
  </tr>
  <tr>
    <td>
	<table width="780" border="0" cellpadding="0" cellspacing="0">
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
	<p>To see the payment collection of a perticular class enter the class here.</p>
	
	<form id="form1" name="form1" method="post" action="">
	  <table width="80%" border="0" class="textformtable">
        <tr>
          <td width="15%">Enter Class: </td>
          <td width="9%"><?php echo getClassCombo("nclass"); ?></td>
          <td width="76%"><input type="submit" name="Submit" value="Submit" /></td>
        </tr>
      </table>
	 </form>
	<form id="form1" name="form1" method="post" action="">
	<table width="90%" border="0" cellspacing="0" cellpadding="0" class="textformtable">
          <tr>
            <td width="30%">Choose date and submit: </td>
            <td width="70%"><?php echo enterdatecombo("edatey", "edatem", "edated"); ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="Reset" type="reset" id="Reset" value="Reset" />
                <input type="submit" name="Submit2" value="Submit" onclick="form1.submit()"/></td>
          </tr>
    </table>
	</form>
	 <?php
	  if( isset($_POST['nclass']) ){
	  	$Q="select st.name, st.student_id, st.class, ttb.admission_fee, ttb.monthly_fee, ttb.session_fee, ttb.library_fee, ttb.other_fee, ttb.payment_date from tution_book ttb, studentinfo st where ttb.student_id=st.student_id and st.class='$_POST[nclass]'";
		$R=mysql_query($Q) or die("can't execute query ".mysql_error());
		
		echo "<table width=100% border=0 class='textformtable'>\n";
		echo "<tr>
			<td width=60>Name</td>
			<td>Student ID</td>
			<td>Class</td>
			<td>Admission Fee</td>
			<td>Monthly Fee</td>
			<td>Session Fee</td>
			<td>Library Fee</td>
			<td>Other Fee</td>
			<td>Payment Date</td>
			</tr>";
		
		while($line = mysql_fetch_array($R, MYSQL_ASSOC)){
			echo "\t<tr>\n";
			foreach($line as $col_value){
				echo "\t\t<td>$col_value</td>\n";
			}
			echo "\t</tr>\n";
		}
		echo "</table>\n";
	  }
	  
	  if( isset($_POST[edated]) ){
	  $Q="select st.name, st.student_id, st.class, ttb.admission_fee, ttb.monthly_fee, ttb.session_fee, ttb.library_fee, ttb.other_fee, ttb.payment_date from tution_book ttb, studentinfo st where ttb.student_id=st.student_id and ttb.payment_date='$_POST[edatey]-$_POST[edatem]-$_POST[edated]'";
	  $R=mysql_query($Q) or die("can't execute query ".mysql_error());
	  echo "<table width=100% border=0 class='textformtable'>\n";
	  	echo "<tr>
			<td width=60>Name</td>
			<td>Student ID</td>
			<td>Class</td>
			<td>Admission Fee</td>
			<td>Monthly Fee</td>
			<td>Session Fee</td>
			<td>Library Fee</td>
			<td>Other Fee</td>
			<td>Payment Date</td>
		</tr>";
		
		while($line = mysql_fetch_array($R, MYSQL_ASSOC)){
			echo "\t<tr>\n";
			foreach($line as $col_value){
				echo "\t\t<td>$col_value</td>\n";
			}
			echo "\t</tr>\n";
		}
		echo "</table>\n";
	}
	 ?>
	</td>
  </tr>
</table>
</center>
</body>
</html>
