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
		$this->db->query("SELECT * FROM users WHERE email = :email AND password = :pass");
		$this->db->bind(':email', $email);
		$this->db->bind(':pass', $password);

		if ($this->db->rowCount() > 0) {
			$first      = $this->db->single()->first_name;
			$last       = $this->db->single()->last_name;
			$email      = $this->db->single()->email;
			$mobile     = $this->db->single()->mobile;
            $admin      = $this->db->single()->is_admin;
			$data = [
				'valid'     =>  '1',
				'first'     =>  $first,
				'last'      =>  $last,
                'email'     =>  $email,
				'mobile'    =>  $mobile,
                'admin'     =>  $admin
			];
			return $data;
		}
		return [
			'valid' => 0
		];

	}
}