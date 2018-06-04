<?php
                  	if(empty($_POST['fName'] ) )
			{ 
				header('location: index.php');
				exit();
			}
	               	if( empty( $_POST['lastName'] ) )
			{
				header('location: index.php');	
				exit();
			}
	               	if( empty( $_POST['id'] ) )
			{
				header('location: index.php');
				exit();	
			}
	               	if( empty( $_POST['role'] ) )
			{
				header('location: index.php');
				exit();
			}
			else
			{
				$fName = $_POST['fName'];
				$lastName = $_POST['lastName'];
				$id = $_POST['id'];
				$role = $_POST['role'];
			}

			$conn = mysql_connect('192.168.0.1','client','mininet1') or die("nojoy");
			if($conn->connect_error){
			echo "failed connection";
			}
			mysql_select_db('cms') or die("Error: Table issue");
		//	echo "inserting";
			$insert = "INSERT INTO users (firstName, lastName, id, role) VALUES('$fName','$lastName','$id','$role')";
			mysql_query($insert);
			echo "Success! Press back to go to main menu.";
			mysql_close('192.168.0.1');
			

?>
<html>
	<form action = "index.php">
	<button> Back </button>
	</form>
</html>
