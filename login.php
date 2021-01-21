<?php
            
	include 'connection.php';
	$error = "";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE email = '$email' AND userPassword = '$password'";
		$result = mysqli_query($conn, $query);

		while($row = mysqli_fetch_assoc($result))
		{

			if($row{'email'} = $email && $row{'userPassword'} = $password)
			{

				session_start();
				$_SESSION['email'] = $email;
				header("Location: home.php");

			}
			

		}
		$error = "Wrong E-Mail or Password!";

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login | Online Assessment System</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/book.png) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
	</head>

	<body>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
						<center> <h5 style="font-family: Noto Sans;">Login to </h5><h4 style="font-family: Noto Sans;">Online Assessment Tool System</h4></center><br>
							<form method="post" action="login.php" enctype="multipart/form-data">
								<div class="form-group">
									<label>Enter Your Email Id:</label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw">Enter Your Password:
										<a href="javascript:void(0)" class="pull-right">Forgot Password?</a>
									</label>
									<input type="password" name="password" class="form-control">
								</div> 
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Login</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Don't have an account?</span> <a href="registered.php">Register</a> Here..
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="jquery.js"></script>
		<script src="bootstrap.min.js"></script>
	</body>
</html>

