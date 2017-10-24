<?php

include '../classes/users.php';

$users = new Users();

$result = $users->insertUser();

if ($result == true) {
	header('Location: ../index.php');
}