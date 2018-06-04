<?php

if( empty($_POST['fName']) )
{
	header('location: index.php');
	exit();
}
if(empty($_POST['lastName']) ) 
{
	header('location: index.php');
	exit();
}
else
{
	$fname = $_POST['fName'];
	$lastName = $_POST['lastName'];
//	echo "$fname";
//	echo "$lastName";
}
$conn = mysql_connect('192.168.0.1','client','mininet1') or die("Error: Cannot Connect");
mysql_select_db('cms') or die("Error: Table issue");
mysql_query("DELETE FROM users WHERE firstName = '$fname' AND lastName = '$lastName' ") or die("Error: Delete issue");

echo "Success! Delete has completed. Press back to go back to main menu";
mysql_close();



?>
<html>
<form action="index.php">
<button> Back </button>
</form>
</html>
