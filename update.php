<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style.css" type="text/css">
		<?php include 'CSS/main.css'; ?>
        <style>
			:root {
 --background: #1d2d50;
 --accent: #fcdab7;
 --accent2: #1e5f74;
 --color: #fefefe;
 --dull: #b8b8b8;
 --error: #e74c3c;
 --highlight: rgba(255,255,255,.05);
}

body {
	margin: 0;
	padding: 0;
	font-family: system, -apple-system, ".SFNSText-Regular", "San Francisco", "Roboto", "Segoe UI", "Helvetica Neue", "Lucida Grande", sans-serif;
	height: 100vh;
	width: 100%;
	background: #1d2d50;
	color: var(--color);
}
h1 {
	font-size: 5em;
	margin: 40px 0;
}

.hidden {
	position: absolute;
	left: -1000%;
	top: -1000%;
	height: 0;
	width: 0;
	pointer-events: none;
	opacity: 0;
}

.formWrapper {
	height: 100%;
	width: 100%;
	display: grid;
	align-items: center;
	justify-content: center;
}
form {
	width: 95vw;
	max-width: 500px;
	box-sizing: border-box;
	padding: 50px 0;
}
form h1 {
	margin: 0 0 15px 0;
	font-size: 3em;
}
.inputblock {
	position: relative;
	display: block;
	padding: 20px 0;
	clear: both;
}
.inputblock input {
	width: 100%;
	padding: 7px;
	box-sizing: border-box;
	display: block;
	background: transparent;
	outline: none;
	font-family: inherit;
	font-size: 15px;
	color: inherit;
	border: 0;
	margin-top: 2px;
	border-bottom: 1px solid var(--color);
}
.inputblock label {
	display: block;
	font-size: 13px;
	color: var(--dull);
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 300;
}


.btn {
	display: inline-block;
	padding: 12px 60px;
	font-size: 18px;
	border: 2px solid var(--color);
	border-radius: 2px;
	cursor: pointer;
	-webkit-user-select: none;
	user-select: none;
	transition: background .3s, color .3s;
}
.btn:hover, .btn:active {
	border: 0;
	padding: 14px 62px;
	background: var(--color);
	color: var(--background);
}
.btn:active {
	box-shadow: inset 0 0 4px 5px rgba(0,0,0,.1);
}

.errcontainer {
	font-size: 14px;
	opacity: 1;
	transition: opacity .3s;
}
.err {
	margin: 5px 0;
	color: var(--error);
}
.err ul {
	list-style-type: none;
	margin: 0;
	padding-inline-start: 2em;
}

.wave {
	width: 100vw;
	height: 25vw;
	position: fixed;
	bottom: 0;
	left: 0;
	z-index: -1;
	pointer-events: none;
}
.wave:nth-child(2) {
	bottom: -5%;
	width: 103%;
	left: -3%;
}
form a {
	position: relative;
	margin: 0;
	line-height: 1.4em;
	display: inline-block;
	color: var(--dull);
	text-decoration: none;
	transition: color .3s;
}
.errorcontainer a {
	display: inline;
	line-height: normal;
	text-decoration: underline;
	color: inherit;
}
form a:before {
	content: "";
	position: absolute;
	left: 50%;
	bottom: 0;
	height: 1px;
	background: var(--dull);
	width: 0px;
	-webkit-transform: translateX(-50%);
	-moz-transform: translateX(-50%);
	-ms-transform: translateX(-50%);
	-o-transform: translateX(-50%);
	transform: translateX(-50%);
	transition: width .5s;
}
form a:hover:before {
	width: 100%;
}
form a:hover {
	color: var(--color);
}

.loader {
	height: 64px;
	width: 64px;
	position: fixed;
	top: calc(50% - 32px);
	left: calc(50% - 32px);
	border: 2px solid var(--highlight);
	border-left: 2px solid var(--color);
	border-radius: 50%;
	-webkit-animation: loader 1.5s linear infinite;
	-moz-animation: loader 1.5s linear infinite;
	-ms-animation: loader 1.5s linear infinite;
	-o-animation: loader 1.5s linear infinite;
	animation: loader 1.5s linear infinite;
}

@-webkit-keyframes loader {to {-o-transform: rotate(360deg);-ms-transform: rotate(360deg);-moz-transform: rotate(360deg);-webkit-transform: rotate(360deg);transform: rotate(360deg);}}
@keyframes loader {to {-o-transform: rotate(360deg);-ms-transform: rotate(360deg);-moz-transform: rotate(360deg);-webkit-transform: rotate(360deg);transform: rotate(360deg);}}


.message {
	text-align: center;
}

.message h2 {
	font-size: 4em;
}

		</style>
	</head>



	
	<body>
    <div>
        <p>This is me</p>
    </div>
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
	<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
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