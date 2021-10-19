<?php
// set cookies
if(isset($_POST['submit'])){
	echo 123;
	$username = htmlentities($_POST["username"]);
	$password = htmlentities($_POST["password"]);

	if (!empty($username) && !empty($password)) {
		setcookie('auth', 'ok', time()+60);
		setcookie('username', $username, time()+180);

		header('Location: loggedin.php');
	}
	else{
		header('Location: index.php');
	} 

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" name="submit" value="Log Me In">
    </form>
</body>
</html>