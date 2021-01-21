<?php 
session_start();
include "connection.php";
if (isset($_SESSION['email'])) {
$query = "SELECT * FROM questions";
$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
$total = mysqli_num_rows($run);
?>

<html>
	<head>
		<title>Assessment Tool </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1>Assessment Tool</h1>
			</div>
		</header>

		<main>
			<div class="container">
				<h2>Welcome to covid-19 Assessmet Tool !</h2>
				<p>This is just a simple question to test your knowledge about covid 19 <?php echo $_SESSION['email']?></p>
				<ul>
				    <li><strong>Number of questions: </strong><?php echo $total; ?></li>
				    <li><strong>Type: </strong>Multiple Choice</li>
				     <li><strong>Score: </strong> &nbsp; Different point for each answer. </li>
				</ul>
				<a href="question.php?n=1" class="start">Start Test</a>
				<a href="exit.php" class="add">Exit</a>

			</div>
		</main>

		<footer>
			<div class="container">
				Assessment Tool 
			</div>
		</footer>

	</body>
</html>
<?php unset($_SESSION['score']); ?>
<?php }
else {
	header("location: index.php");
}
?>