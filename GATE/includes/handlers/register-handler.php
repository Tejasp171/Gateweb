<?php 

function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}



function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = strtolower($inputText);
	return $inputText;
}


if(isset($_POST['registerButton'])) {
	//Register button was pressed
    echo "hi register button was pressed";
	$Name = sanitizeFormString($_POST['Name']);
	$email = sanitizeFormString($_POST['email']);
	$email2 = sanitizeFormString($_POST['email2']);
    $mobile = sanitizeFormString($_POST['mobile']);
	$mobile2 = sanitizeFormString($_POST['mobile2']);
	$password = sanitizeFormPassword($_POST['password']);
	$password2 = sanitizeFormPassword($_POST['password2']);

	$wasSuccessful = $account->register( $Name, $email, $email2,$mobile ,$mobile2,$password, $password2);

	if($wasSuccessful == true) {

		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
	}
	else
	{
		echo "i am fasle by register please help sahil;";
	}

}


?>