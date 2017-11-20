<?php

class account extends formmodel {
	public $id;
	public $email;
	public $fname;
	public $lname;
	public $phone;
	public $birthday;
	public $gender;
	public $password;
	protected static $formmodelName = 'account';
	public static function getTablename()
	{
		$tableName='accounts';
		return $tableName;
		}
	}
?>

