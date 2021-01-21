<?php 
session_start();
include "connection.php";
if (isset($_SESSION['email'])) {
	?>
	<?php if(!isset($_SESSION['score'])) {
		header("location: question.php?n=1");
	}
	?>
<html>
	<head>
		<title>P</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1>PHP-quiz</h1>
			</div>
		</header>

		<main>
			<div class= "container">
			<h2>Congratulations!</h2> 
				<p>You have successfully completed the test</p>
				<p>Total points: <?php if (isset($_SESSION['datas'])) {
										echo $_SESSION['datas']; 
										if($_SESSION['datas']<  16  )
										{	

											echo " You do not follow the rules if you experiencing any of the following symptoms , please call 911 or go directly to your nearest emergency department or health centre if you are in a smaller community.
											:\n 
												difficulty breathing (e.g. unable to finish sentences because of your breathing, short of breath at rest, unable to lie down because of difficulty breathing); \n
												chest pain; \n
												having a very hard time waking up; \n 
												fainted or lost consciousness; OR;\n
												difficulty managing your daily life because of breathing difficulties. ";

										}
										elseif($_SESSION['datas'] > 15 && $_SESSION['datas']  < 47)
										{

											echo " You must follow the rules and take care of yourself ";
											

										}
										elseif($_SESSION['datas'] > 47)
										{

											echo " You follow the rules determined by the world health organization";
											

										}
										
									
									}; 
									
									?> 					
				</p>
		<a href="question.php?n=1" class="start">Start Again</a>
		<a href="home.php" class="start">Go Home</a>
		</div>
		</main>
		</body>
		</html>

		<?php 
		$datas = $_SESSION['datas'];
		$email = $_SESSION['email'];
		$query = "UPDATE users SET datas = '$datas' WHERE email = '$email'";
		$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
 		?>



<?php unset($_SESSION['time_up']); ?>
<?php unset($_SESSION['start_time']); ?>
<?php unset($_SESSION['datas']); ?>
<?php }
else {
	header("location: home.php");
}
?>

