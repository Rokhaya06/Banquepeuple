<!DOCTYPE html>
<html>
    <head>
        <title>BANQUE DU PEUPLE</title>
        <meta charset="utf-8">
		<link rel="stylesheet" href="/BanqueDuPeuple/public/css/bootstrap.min.css">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="public/template/Login_v1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/template/Login_v1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/template/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/template/Login_v1/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/template/Login_v1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/template/Login_v1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/template/Login_v1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/template/Login_v1/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/template/Login_v1/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/template/Login_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/template/Login_v1/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(BanqueDuPeuple/public/template/Login_v1/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>
		
				<form class="login100-form validate-form" method="POST" id="formConnex" 
				action="/BanqueDuPeuple/controller/userController.php"
				 class="col-md-4 offset-md-4" >
				<?php
						if(isset($_GET['connexion']) && $_GET['connexion'] == 0)
						{
							echo 'LOGIN OU MOT DE PASSE INCORRECT...';
						}
                 ?>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="login" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="mdp" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="connexion" >
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="public/template/Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="public/template/Login_v1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="BanqueDuPeuple/public/template/Login_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="BanqueDuPeuple/public/template/Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="BanqueDuPeuple/public/template/Login_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="BanqueDuPeuple/public/template/Login_v1/vendor/daterangepicker/moment.min.js"></script>
	<script src="BanqueDuPeuple/public/template/Login_v1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="BanqueDuPeuple/public/template/Login_v1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="BanqueDuPeuple/public/template/Login_v1/js/main.js"></script>

</body>
</html>