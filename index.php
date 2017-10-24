<?php
include 'classes/users.php';

$users = new Users();
$data = $users->getUsers();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
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
<?php if (count($data)):?>
<table border="1">
	<thead>
		<tr>
			<td>ID</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Phone</td>
			<td>&nbsp;</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data as $user): static $sn=0;?>
		<tr>
			<td><?=++$sn;?></td>
			<td><?=$user['first_name'];?></td>
			<td><?=$user['last_name'];?></td>
			<td><?=$user['phone'];?></td>
			<td>
				<a href="edit.php?id=<?=$user['id'];?>">Edit</a> |
				<a href="delete.php?id=<?=$user['id'];?>"">Delete</a>
			</td>
		</tr>
	<?php endforeach;?>
	</tbody>
</table>
<?php else:?>
	<h3>No records were found. You go ahead and add new records.</h3>
<?php endif;?>

<form method="post" action="actions/UserInsertAction.php">
	<div>
		<label>First Name</label>
		<input type="text" name="first_name">
	</div>
	<div>
		<label>Last Name</label>
		<input type="text" name="last_name">
	</div>
	<div>
		<label>Phone</label>
		<input type="text" name="phone">
	</div>
	<div>
		<button type="submit">Submit</button>
	</div>
</form>
</body>
</html>