<?php

include '../classes/users.php';

$users = new Users();

$result = $users->updateUser();

if ($result == true) {
	header('Location: ../index.php');
}