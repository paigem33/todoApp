<?php
	class Account {
		private $con;
		private $errorArray;
		public function __construct($con) {
			$this->con = $con;
			$this->errorArray = array();
		}
		public function login($un, $pw) {
			$pw = md5($pw);
			$query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password='$pw'");
			if(mysqli_num_rows($query) == 1) {
				return true;
			}
			else {
				array_push($this->errorArray, Constants::$loginFailed);
				return false;
			}
		}
        //register is a public function becasue it is the one we will be calling from a different file
		public function register($un, $em, $em2, $pw, $pw2) {
            //$this-> tells it to look at this class
			$this->validateUsername($un);
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw, $pw2);
			if(empty($this->errorArray) == true) {
				//Insert into db
				return $this->insertUserDetails($un, $em, $pw);
			}
			else {
				return false;
			}
		}
		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
		}
        //private means it can only be called within this class
		private function insertUserDetails($un, $em, $pw) {
			$encryptedPw = md5($pw);
			$date = date("Y-m-d");
			$result = mysqli_query($this->con, "INSERT INTO users VALUES (NULL, '$un', '$em', '$encryptedPw')");
			return $result;
		}
		private function validateUsername($un) {
			if(strlen($un) > 25 || strlen($un) < 5) {
                //The :: is like the ->, but the :: is for when you do not have an instance of the class, and then -> is for when you do
				array_push($this->errorArray, Constants::$usernameCharacters);
				return;
			}
			$checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username='$un'");
			if(mysqli_num_rows($checkUsernameQuery) != 0) {
				array_push($this->errorArray, Constants::$usernameTaken);
				return;
			}
		}
		private function validateEmails($em, $em2) {
			if($em != $em2) {
				array_push($this->errorArray, Constants::$emailsDoNotMatch);
				return;
			}
			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, Constants::$emailInvalid);
				return;
			}
			$checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'");
			if(mysqli_num_rows($checkEmailQuery) != 0) {
				array_push($this->errorArray, Constants::$emailTaken);
				return;
			}
		}
		private function validatePasswords($pw, $pw2) {
			
			if($pw != $pw2) {
				array_push($this->errorArray, Constants::$passwordsDoNoMatch);
				return;
			}
			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
				return;
			}
			if(strlen($pw) > 30 || strlen($pw) < 5) {
				array_push($this->errorArray, Constants::$passwordsLength);
				return;
			}
		}
	}
?>