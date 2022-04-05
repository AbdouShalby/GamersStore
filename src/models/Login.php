<?php

namespace Models;

use \Models\Database;

class Login
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	/**
	 * READ
	 * @return array
	 */
	public function login($email, $password)
	{
		$this->db->query("SELECT (`email`, `password`) FROM users WHERE email = :email AND password = :pass)");
		$this->db->bind(':email', $email);
		$this->db->bind(':pass', $password);
		return $this->db->single();
	}

}