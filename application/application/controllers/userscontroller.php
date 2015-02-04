<?php

class UsersController extends Controller
{
	function view($lUserID = null, $sUserName = null, $sFirstName = null)
	{
		$result = $this->User->select($lUserID);

		$this->set('title', 'View user details');

		$this->set('id', $result['pUserID']);
		$this->set('username', $result['sUserName']);
		$this->set('firstname', $result['sFirstName']);
		$this->set('lastname', $result['sLastName']);
		$this->set('gender', $result['eGender']);
	}
}