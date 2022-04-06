<?php

namespace controllers;

use \Models\Signup;

class SignupController
{
	public function __construct()
	{
		$this->signupModel = new Signup;
	}

	// Render View
	public function signup()
	{
		view('front/signup');
	}

	// Create New Account
	public function store()
	{
		session_start();
		if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
			$hashedPass = sha1($_POST['password']);

			if (empty($_POST['first'])) {
				$_SESSION['empty_first'] = EMPTY_FIRST_NAME;
			} elseif (strlen($_POST['first']) < 4) {
				$_SESSION['first_3'] = FIRST_NAME_3;
			} elseif (strlen($_POST['first']) > 20) {
				$_SESSION['first_20'] = FIRST_NAME_20;
			}

			if (empty($_POST['last'])) {
				$_SESSION['empty_last'] = EMPTY_LAST_NAME;
			} elseif (strlen($_POST['last']) < 4) {
				$_SESSION['last_3'] = LAST_NAME_3;
			}elseif (strlen($_POST['last']) > 20) {
				$_SESSION['last_20'] = LAST_NAME_20;
			}

			if (empty($_POST['email'])) {
				$_SESSION['empty_email'] = EMPTY_EMAIL;
			}

			if (empty($_POST['password'])) {
				$_SESSION['empty_pass'] = EMPTY_PASSWORD;
			}

			if (empty($_POST['mobile'])) {
				$_SESSION['empty_mob'] = EMPTY_MOBILE;
			}

			if (!empty($_SESSION)) {
				header('location: ' . URLROOT . '/signup');
			}

			// Check If There's No Errors Proceed The Signup Operation
			if (empty($_SESSION)) {
				$this->signupModel->signup($_POST['first'], $_POST['last'], $_POST['email'], $hashedPass, $_POST['mobile']);
				$_SESSION['account_created'] = ACCOUNT_CREATED;
				header('location: ' . URLROOT . '/signup');
			}
		} else {
			header('location: ' . URLROOT . '/signup');
		}
	}
}