<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="login.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>
<?php
// Connect to the MySQL database
$db = new PDO('mysql:host=localhost;dbname=captive_portal', 'root', '');

// Check if the user is logged in
if (isset($_SESSION['logged_in'])) {
    // The user is logged in, redirect to the home page
    header('Location: home.php');
} else {
    // The user is not logged in, check if the form has been submitted
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Get the username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Check if the username and password are correct
        $sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
        $result = $db->query($sql);
        $user = $result->fetch(PDO::FETCH_ASSOC);

        // If the username and password are correct, log the user in
        if ($user) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            header('Location: home.php');
        } else {
            // The username and password are incorrect, display an error message
            echo "<p style='color:red'>Invalid username or password</p>";
        }
    }
}
?>