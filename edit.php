<?php

include 'classes/users.php';

$users = new Users();

$id = $_GET['id'];
$getUser = $users->getUser($id);
if ($getUser == null) {
	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style type="text/css">
		
		table {
			border: 1px solid #000;
			border-collapse: collapse;
			margin-bottom: 20px;
		}

		table thead td {
			background-color: #ccc;
		}
		table tr td{
			border-bottom: 1px solid #000;
			padding: 5px;
		}

		form {
			max-width: 250px;
			border: 1px solid #0044ee;
			padding: 20px;
		}

		form div {
			padding: 4px 0px;
		}

		div label {
			display: block;
		}

		div input {
			display: block;
			padding: 6px;
			width: 100%;
		}

		div button {
			font-size: 24px;
		}



	</style>
</head>
<body>
<div>
	<form method="post" action="actions/UserUpdateAction.php">
		<div>
			<label>First Name</label>
			<input type="text"
			 value="<?=$getUser['first_name'];?>" name="first_name">
		</div>
		<div>
			<label>Last Name</label>
			<input type="text" 
			  value="<?=$getUser['last_name'];?>" name="last_name">
		</div>
		<div>
			<label>Phone</label>
			<input type="text" 
			  value="<?=$getUser['phone'];?>"
			  name="phone">
		</div>
		<div>
			<input type="hidden" name="id" 
			value="<?=$getUser['id'];?>">
			<button type="submit">Submit</button>
		</div>
	</form>
</div>
</body>
</html>