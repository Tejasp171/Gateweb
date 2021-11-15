<?php

	include("includes/config.php");
	include("includes/classes/Constants.php");
	include("includes/classes/Account.php");


	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
	
?>

<html>
<head>
	<title>GATE</title>

	<link rel="stylesheet" type="text/css" href="assets/css/register.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
	<?php 

	if(isset($_POST['registerButton'])) {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").hide();
					$("#registerForm").show();
				});
			</script>';
	}
	else {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").show();
					$("#registerForm").hide();
				});
			</script>';
	}

	?>
	

	<div id="background">
		<div id="loginText">
				<h1>GATE 2022 ORGANIZED BY IIT KHARGPUR</h1>
				

				</ul>
			</div>

		<div id="loginContainer">

			<div id="inputContainer">
				<form id="loginForm" action="register.php" method="POST">
					<h2> REGISTERED CANDIDATE LOGIN</h2>
					<p >
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginEmail">Email Address</label>
						<input id="loginEmail" name="loginEmail" type="email" placeholder="Your Email Address"  required>
					</p>
					<p class="content">
						<label for="loginPassword">PASSWORD</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="Your Password" required>
					</p>

					<button type="submit" name="loginButton">LOG IN</button>

					<div class="hasAccountText">
						<P>Not Registered ?<span id="hideLogin"> Register here.</span></P>
					</div>
					
				</form>



				<form id="registerForm" action="register.php" method="POST">
					<h2>CANDIDATE REGISTRATION</h2>


					<p>
					
						<label for="Name">Name of the Candidate</label>
						<input id="Name" name="Name" type="text" placeholder="Your Name"  required>
					</p>



					<p>
						<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
						<label for="email">Email Address</label>
						<input id="email" name="email" type="email" placeholder="Your Email "  required>
					</p>

					<p>
						<label for="email2">Confirm Email Address</label>
						<input id="email2" name="email2" type="email" placeholder="Confirm Your Email"  required>
					</p>
					<p>
						<?php echo $account->getError(Constants::$mobileDoNoMatch); ?>
						<?php echo $account->getError(Constants::$mobileNotnumeric); ?>
						<?php echo $account->getError(Constants::$mobileCharacters); ?>
						<label for="mobile">Mobile Number</label>
						<input id="mobile" name="mobile" type="text" placeholder="Your Mobile Number"  required>
					</p>
					<p>
						<label for="mobile2">Confirm Mobile Number</label>
						<input id="mobile2" name="mobile2" type="text" placeholder=" Confirm Your Mobile Number"  required>
					</p>					
					<p>
						<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
						<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
						<?php echo $account->getError(Constants::$passwordCharacters); ?>
						<label for="password">Password</label>
						<input id="password" name="password" type="password" placeholder="Your password" required>
					</p>

					<p>
						<label for="password2">Confirm Password</label>
						<input id="password2" name="password2" type="password" placeholder="Your password" required>
					</p>

					<button type="submit" name="registerButton">REGISTER</button>

					<div class="hasAccountText">
						<P>Already Registered?<span id="hideRegister"> Log in here.</span></P>
					</div>
					
				</form>


			</div>

			

		</div>
	</div>

</body>
</html>