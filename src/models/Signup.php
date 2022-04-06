<?php

namespace Models;

use \Models\Database;

class Signup
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

    /**
     * UPDATE
     * @param $value
     * @return boolean
     */
	public function checkUser( $value) : bool
	{
		$this->db->query("SELECT * FROM users WHERE email = '$value'");
		if ($this->db->resultSet())
			return true;
		return false;
	}

	/**
	 * CREATE
	 * @param $firstName
	 * @param $lastName
	 * @param $email
	 * @param $hashedPass
	 * @param $mobile
	 * @return bool
	 */
	public function signup($firstName, $lastName, $email, $hashedPass, $mobile): bool
	{
		$this->db->query("INSERT INTO users (`first_name`, `last_name`, `email`, `password`,`mobile`) VALUES (:first, :last, :email, :pass, :mob)");
		$this->db->bind(':first', $firstName);
		$this->db->bind(':last', $lastName);
		$this->db->bind(':email', $email);
		$this->db->bind(':pass', ($hashedPass));
		$this->db->bind(':mob', $mobile);
		if ($this->db->execute())
			return true;
		return false;
	}

}