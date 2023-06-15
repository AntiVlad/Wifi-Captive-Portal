<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style.css" type="text/css">
        <style>
		* {
    margin: 0;
    padding: 0;
}

body {
    font-size: 18px;
    font-family: 'Poppins',Arial, Helvetica, sans-serif;
}

section {
    background-color: grey;
    height: 100vh;
}

.intro {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 30px;
}

.intro>h1 {
    font-size: 40px;
}

h1 {
    margin-bottom: 20px;
}

.container {
    display: flex;
    flex-direction: row;
    justify-content: center;
    text-align: center;
}

.login {
    border: 1px solid gray;
    border-radius: 4px;
    padding: 30px 60px;
    background-color: rgba(0, 0, 255, 0.501);
    /* height: 50vh; */
    /* width: 0 auto; */
}

.login>h1 {
    font-size: 30px;
}

.formm {
    display: flex;
    flex-direction: column;
    gap: 10px;
    justify-content: space-around;
}

label {
    padding-right: 10px;
}

.first,
.second,
.btn {
    display: block;
    margin: 10px 0;
    width: 100%;
}

.btn {
    margin-top: 140px;
}


input {
    padding: 10px 30px;
    font-family: 'Poppins', sans-serif;
    border: 1px solid gray;
    border-radius: 8px;
    background-color: rgb(149, 149, 217);
    /* width: 100%; */
}

input:focus {
    border: 1px solid black;
    margin: 0;
    background-color: rgb(149, 149, 217);
    color: black;
    font-size: 14px;
    font-family: 'Poppins', Arial, Helvetica, sans-serif;
}


input:hover,
.btn:hover {
    /* cursor: pointer; */
    background-color: rgb(69, 69, 69);
}

.btn:hover {
    cursor: pointer;
}

@media (min-width:320px) and (max-width:420px) {

    .login {
        height: 100px;
        padding: 60px 60px;
        width: 0 auto;
    }

    h1 {
        font-size: 82px;
    }

    input:hover {
        background-color: black;
    }
}

		</style>
	</head>



	
	<body>
    
		<section>
			<!-- <p>HKI</p> -->
			<div class="intro">
				<h1>WELCOME!</h1>
				<p>This is me</p>
			</div>
			<div class="container">
				<div class="login">
					<h1>Login</h1>
					<form action="login.php" method="post" class="formm">
						<div class="first">
							<label for="username">
								<i class="fas fa-user"></i>
							</label>
							<input type="text" name="username" placeholder="Username" id="username" required>
						</div>
						<div class="second">
							<label for="password">
								<i class="fas fa-lock"></i>
							</label>
							<input type="password" name="password" placeholder="Password" id="password" required>
						</div>
						<div class="sub">
							<input type="submit" value="LOGIN" class="btn">
							
						</div><!-- <input type="submit" value=""> -->
					</form>
				</div>
			</div>
		<!-- Code injected by live-server -->
	</section>
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
