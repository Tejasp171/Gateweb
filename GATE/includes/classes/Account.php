<?php
	class Account {

		private $con;
		private $errorArray;

		public function __construct($con) {
			$this->con = $con;
			$this->errorArray = array();
		}

		public function login($loginEmail, $loginPassword) {


			$loginPassword = md5($loginPassword);


			$query = mysqli_query($this->con, "SELECT * FROM users WHERE email='$loginEmail' AND password='$loginPassword'");

			if(mysqli_num_rows($query) == 1) {
				echo"hello i am true login ";
				return true; 
			}
			else {
				
				array_push($this->errorArray, Constants::$loginFailed);
				return false;
			}

		}

		public function register($Name, $email, $email2,$mobile ,$mobile2,$password, $password2) {
			echo" register function entered";
			//    need for validating name $this->validateName($Name);
			$this->validateEmails($email, $email2);
			$this->validateMobiles($mobile, $mobile2);
			$this->validatePasswords($password, $password2);

			if(empty($this->errorArray) == true) {
				//Insert into db
				return $this->insertUserDetails($Name, $email, $mobile ,$password);
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

		private function insertUserDetails($Name, $email, $mobile ,$password) {
			$encryptedPw = md5($password);
			$profilePic = "assets/images/profile-pics/head_emerald.png";
			$date = date("Y-m-d");

$result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$Name', '$email', '$mobile', '$encryptedPw', '$date', '$profilePic')");

			return $result;
		}






		private function validateEmails($email, $email2) {
			echo" entered email checking";
			if($email != $email2) {
				echo" wrong email";
				array_push($this->errorArray, Constants::$emailsDoNotMatch);
				return;
			}

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo" wrong email1";
				array_push($this->errorArray, Constants::$emailInvalid);
				return;
			}

			$checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$email'");
			if(mysqli_num_rows($checkEmailQuery) != 0) {
				echo" wrong email2";
				array_push($this->errorArray, Constants::$emailTaken);
				print_r($this->errorArray);
				return;
			}

		}

		private function validatePasswords($password, $password2) {
			
			if($password != $password2) {
				array_push($this->errorArray, Constants::$passwordsDoNoMatch);
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $password)) {
				array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
				return;
			}

			if(strlen($password) > 30 || strlen($password) < 5) {
				array_push($this->errorArray, Constants::$passwordCharacters);
				return;
			}

		}

		private function validateMobiles($mobile, $mobile2) {
			
			if($mobile != $mobile2) {
				array_push($this->errorArray, Constants::$mobileDoNoMatch);
				return;
			}

			if(preg_match('/[^0-9]/', $mobile)) {
				array_push($this->errorArray, Constants::$mobileNotnumeric);
				return;
			}

			if(strlen($mobile) != 10) {
				array_push($this->errorArray, Constants::$mobileCharacters);
				return;
			}

		}


	}
?>