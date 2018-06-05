<?php
                  	$conn = mysql_connect('192.168.0.1','client','mininet1');
			if($conn->connect_error){
			echo "Error: Failed to Connect to Database";
			}
			mysql_select_db('cms') or die("Error: CMS Table Not Found");
			$sql = "SELECT * FROM users";
			$result = mysql_query($sql) or die("Error: Query Failed");
//			<html>
			echo '<table class="table table-striped table-bordered table-hover">';
			echo "<tr><th>FirstName </th><th>LastName </th><th>ID</th><th>Role</th></tr>";
			while($row = mysql_fetch_assoc($result)){
			echo "<tr><td>";
		//	echo "First Name: ";
			echo $row['firstName'];
		//	echo "\r\n";
		//	echo "Last Name: ";
			echo "</td><td>";
			echo $row['lastName'];
		//	echo "\r\n";
			echo "</td><td>";
			//echo "ID: ";
			echo $row['id'];
			echo "</td><td>";
			echo $row['role'];
			echo "</td><tr>";
			}
			echo "</table>";
			mysql_close('192.168.0.1');
?>
<html>
	<form action="index.php">
	<button> Back </Button>
	</form>
</html>
