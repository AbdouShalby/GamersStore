<?php

namespace Controllers;

use \Models\Login as LoginModel;

class LoginController
{
	public function __construct()
	{
		$this->loginModel = new LoginModel();
	}

	// Render View
	public function login()
	{
		view('front/login');
	}


}