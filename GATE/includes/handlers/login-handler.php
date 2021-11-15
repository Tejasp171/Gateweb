<?php
if(isset($_POST['loginButton'])) {
	//Login button was pressed
	$loginEmail = $_POST['loginEmail'];
	$loginPassword = $_POST['loginPassword'];

	$result = $account->login($loginEmail, $loginPassword);

	if($result == true) {
		$_SESSION['userLoggedIn'] = $loginEmail;
		header("Location: index.php");
	}

}
?>