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
	 * @param $email
	 * @param $password
	 * @return bool
	 */
	public function login($email, $password): array
	{
		$this->db->query("SELECT email FROM users WHERE email = :email AND password = :pass");
		$this->db->bind(':email', $email);
		$this->db->bind(':pass', $password);

		if ($this->db->rowCount() > 0) {
			$email = $this->db->single()->email;
			$data = [
				'valid'   =>  '1',
				'email'  => $email
			];
			return $data;
		}
		return [
			'valid' => 0
		];

	}
}