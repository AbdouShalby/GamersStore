<?php

namespace controllers;

use \Models\Signup as Model;

class SignupController
{
	public function __construct()
	{
		$this->signupModel = new Model;
	}

	// Render View
	public function signup()
	{
		view('front/signup');
	}

	// CREATE new task
	public function store()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->signupModel->signup($_POST['first_name']))
			header('location: ' . URLROOT . '/front/signup', true, 303);
		else
			die(SIGNUP_FAILD);
	}
}