<?php
$result = "";
if (isset($_GET['msg'])) {
	$result = $_GET['msg'];
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<link rel="icon" type="image/png" href="image/6.png">
	<title>Admin Login - HRM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/morris.css" type="text/css" />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<!-- jQuery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}

		body {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: url('image/1.png') no-repeat;
			background-size: cover;
			background-position: center;
		}

		.footer p {
			width: 100%;
			position: fixed;
			bottom: 0;
			left: 0;
		}

		.form-box h2 {
			font-size: 2.5em;
			color: #162938;
			text-align: center;
		}

		.login-w3 {
			width: 100%;
			float: unset;
			text-align: center;
		}

		.wrapper {
			position: relative;
			width: 400px;
			height: 400px;
			background: transparent;
			border: 2px solid rgba(255, 255, 255, .5);
			border-radius: 20px;
			backdrop-filter: blur(20px);
			box-shadow: 0 0 30px rgba(0, 0, 0, .5);
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.wrapper .form-box {
			width: 100%;
			padding: 40px;
		}

		.form-box h2 {
			font-size: 2em;
			color: #162938;
		}

		.input-box {
			position: relative;
			width: 100%;
			height: 50px;
			border-bottom: 2px solid #dfeff9;
			margin: 30px 0;
		}

		.input-box label {
			position: absolute;
			top: 50%;
			left: 5px;
			transform: translateY(-50%);
			font-size: 1.2em;
			color: #dfeff9;
			font-weight: 500;
			pointer-events: none;
			transition: .5s;
		}

		.input-box i,
		.input-box .icon {
			position: absolute;
			right: 8px;
			font-size: 1.2em;
			color: #dfeff9;
			line-height: 57px;
			background: none;
			color: #dfeff9;
		}

		.input-box input:focus~label,
		.input-box input:valid~label {
			top: -5px;
		}

		.input-box input {
			width: 100%;
			height: 100%;
			background: transparent;
			border: none;
			outline: none;
			font-size: 1.2em;
			color: #dfeff9;
			font-weight: 600;
			padding: 0 35px 0 5px;
		}

		.login-w3 .login {
			width: 100%;
			height: 45px;
			background-color: #162938;
			border: none;
			outline: none;
			border-radius: 6px;
			cursor: pointer;
			font-size: 1.2em;
			color: #dfeff9;
			font-weight: 500;
			transition: .5s;
		}

		.login-w3 .login:hover {
			background-color: #010101;
			background-image: linear-gradient(160deg, #010101 0%, #4e6865 100%);
			transition: .5s;
		}

		.employee-login {
			color: #dfeff9;
			font-weight: 500;
			display: flex;
			justify-content: center;

		}

		.employee-login label:hover {
			text-decoration: underline;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<div class="form-box login">
			<h2>LOGIN</h2>
			<form action="controller/login.php" method="post">
				<div class="input-box">
					<input type="Email" name="name" class="name" required>
					<span class="icon"><ion-icon name="mail"></ion-icon></span>
					<label>Email</label>
				</div>
				<div class="input-box">
					<input type="password" name="password" id="Psw" class="password" required>
					<label>Password</label>
					<i class="fa fa-eye-slash" aria-hidden="false" style="padding-left: 20px;" onclick="passwordeyes(this);"></i>
				</div>
				<h4 style="color: #F1C40F;"><?php echo $result; ?></h4>
				<div class="login-w3">
					<input type="submit" name="submit" class="login" value="Login">
				</div>
				</br>
				<div class="employee-login">
					<label><a href="./user" class="text-white">Login as an Employee</a></label>
				</div>
			</form>
			<!-- <div class="back">
					<a href="index.php">Back to home</a>
				</div> -->
		</div>
	</div>
	<div class="footer">
		<p>Human Resource Managemant System. All Rights Reserved &copy; <?= date("Y") ?> </p>
	</div>
	<script>
		function passwordeyes(_this) {
			var x = document.getElementById("Psw").type;
			if (x == "password") {
				document.getElementById("Psw").type = "text";
				_this.setAttribute('class', "fa fa-eye")
			} else {
				document.getElementById("Psw").type = "password";
				_this.setAttribute('class', "fa fa-eye-slash")
			}
		}
	</script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

<?php
/*current computer name get */
//$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//echo $hostname;

/*check to which op system*/
/*if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    		echo 'This is a server using Windows!';
		} else {
   			 echo 'This is a server not using Windows!';
		}*/

/*get to mac Address in windows system*/
//--ob_start();
//Get the ipconfig details using system commond
//--system('ipconfig /all');

// Capture the output into a variable
//--$mycom=ob_get_contents();
// Clean (erase) the output buffer
//--ob_clean();

//--$findme = "Physical";
//Search the "Physical" | Find the position of Physical text
//--$pmac = strpos($mycom, $findme);

// Get Physical Address
//--$mac=substr($mycom,($pmac+36),17);
//Display Mac Address
//--echo $mac;

/* End mac system code*/

/* get current computer mac address */
//echo substr(exec('getmac'),0,17);

//echo substr("<br>40-8D-5C-B1-B7-7D \Device\Tcpip_{BF6495D7-04E6-4599-99B0-FA6656B57D35}", 0,17)
?>