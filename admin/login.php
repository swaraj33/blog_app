<?php
require_once('../includes/config.php');
if($user->is_logged_in()){
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin login</title>
</head>
<body>
<?php

	if (isset($_POST['submit'])) {
		
		$username=trim($_POST['username']);
		$password=trim($_POST['password']);
		// If valid id password is entered
		if ($user->login($username,$password)) {
			header('location: index.php');
			exit;
		}
		//if Invalid password is entered
		else{
			$message='<p>Invalid username or password</p>';
		}
	}
	if (isset($message)) {
		echo $message;
	}

?>

<form action="" method="POST" class="form">
	<lebel>Username</lebel>
	<input type="text" name="username" value="" required /><br>
	
	<lebel>Password</lebel>
	<input type="password" name="password" value="" required /><br>

	<input type="submit" name="submit" value="Sign In">

</form>
</body>
</html>





















