<?php
include 'db.php';

class Users extends Db{
	public function __construct()
	{
		parent::__construct();
	}

	public function getUsers()
	{
		$sql = 'select * from users';

		$users = $this->db->query($sql);

		$data = [];

		while ($row = $users->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
	}

	public function insertUser()
	{
		$sql = sprintf('insert into users(
			first_name, 
			last_name,
			phone) values(%s, %s, %s)', 
			"'".$_POST['first_name']."'",
			"'".$_POST['last_name']."'",
			"'".$_POST['phone']."'"
		);

		$result = $this->db->query($sql);

		if ($result) {
			return true;
		}

		echo $this->db->error;
	}

	public function updateUser()
	{
		$sql = sprintf('update users set
			first_name=%s, 
			last_name=%s,
			phone=%s where id=%s', 
			"'".$_POST['first_name']."'",
			"'".$_POST['last_name']."'",
			"'".$_POST['phone']."'",
			"'".$_POST['id']."'"
		);

		$result = $this->db->query($sql);

		if ($result) {
			return true;
		}

		echo $this->db->error;
	}

	public function getUser($id)
	{
		$sql = sprintf('select * from users where id=%s', "'".$id."'");

		$users = $this->db->query($sql);

		$data = [];

		while ($row = $users->fetch_assoc()) {
			return $row;
		}

		return null;
	}

	public function deleteUser($id)
	{
		$sql = sprintf("delete from users where id=%s", "{$id}");

		$result = $this->db->query($sql);

		if ($result) {
			
			return true;
		}

		return false;
	}
}