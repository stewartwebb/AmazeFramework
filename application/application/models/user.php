<?php

class User extends Model {
	public function select($id)
	{
		$this->objDatabase->query('SELECT pUserID, sUserName, sFirstName, sLastName, eGender FROM tUsers WHERE pUserID = :id;');
		$this->objDatabase->bind(':id', $id);
		$this->objDatabase->execute();
		$result = $this->objDatabase->single();

		return $result;
	}
}