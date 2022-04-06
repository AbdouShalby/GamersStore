<?php

namespace Controllers;

use \Models\Login;

class LoginController
{
	public function __construct()
	{
		$this->loginModel = new Login;
	}

	// Render View
	public function login()
	{
		view('front/login');
	}

	// Login Logic
	public function userLogin() {
		session_start();
		if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
			$hashedPass = sha1($_POST['password']);
			$response = $this->loginModel->login($_POST['email'], $hashedPass);
			if($response['valid'] == 1){
				$_SESSION['user'] = $_POST['email'];
				header('location: ' . URLROOT); // Redirect To Dashboard Page
			}else{
				echo "error";
			}
//
//			if () {
//				$_SESSION['user'] = $_POST['email']; // Register Session Name
//				header('location: ' . URLROOT); // Redirect To Dashboard Page
//			} else {
//				header('location: ' . URLROOT . '/login');
//			}
//
//			if (empty($_POST['email'])) {
//				$_SESSION['empty_email'] = EMPTY_EMAIL;
//			}
//
//			if (empty($_POST['password'])) {
//				$_SESSION['empty_pass'] = EMPTY_PASSWORD;
//			}
//
//			if (!empty($_SESSION)) {
//				header('location: ' . URLROOT . '/login');
//			}
//
//			if (empty($_SESSION)) {
////				$this->loginModel->login($_POST['email'], $hashedPass);
////				$_SESSION['user'] = $_POST['email']; // Register Session Name
////				$_SESSION['account_login'] = ACCOUNT_LOGIN;
////				header('location: ' . URLROOT . '/login');
//			}
		} else {
			header('location: ' . URLROOT . '/login');
		}
	}
}