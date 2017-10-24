<?php

$id = $_GET['id'];
if (!$id) {
	header("Location: index.php");
}

include 'classes/users.php';

$users = new Users();

$deleteUser = $users->deleteUser($id);

if ($deleteUser) {
	header("Location: index.php");
}

