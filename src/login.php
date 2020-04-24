<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
</head>
<body>
	<header>
	</header>
</form>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="Logo">
					<img src="../assets/img/logo.png" style="width: 100px ; height : 100px;">	
				</div>
				<div class="txt_ap">
					<h1 style="color: #1b294a"> FE Easy Solution </h1>
					<p style="color:#1e4383 ; font-size : 17px; text-align: justify;">"Menjadi penghubung dunia yang lebih dari sekadar operator bandar udara dengan keunggulan layanan yang menampilkan keramahtamanahan khas Indonesia."
					</p>
				</div>
				<div class = "Image">	
					<img src="../assets/img/register-fam.png" style="width: 600px ; height : 500px;">				
				</div>
			</div>
		 	<div class="col-md-6">
				<div class="Login">
					<h3 style="color: #0048a6 ; text-align: center">Log In</h3>
					<form method="post" name="login_form" action="cek.php">
						<h5>Username</h5>
						<input type="text" name="username" placeholder="Username" style="width: 100%;">
						<h5>Password</h5>
						<input type="password" name="password" placeholder="Password" style="width: 100%;">
						<br><br>
						<div class="row">
							<div class="col-md-6">
								<a href="" style="text-decoration: underline;margin-left: 1px;">Forget Password?</a>
							</div>
							<div class="col-md-6">
								<input type="Submit" value="Log In" style="background-color: #ffc05e; color : #1b294a ;font-size: 16px; width: 100px;border-radius: 5px;margin-left: 30px;">
							</div>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>