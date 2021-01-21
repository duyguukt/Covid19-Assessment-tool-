<?php 
session_start();
include "connection.php";
if (isset($_SESSION['email'])) {
	
	if (isset($_GET['n']) && is_numeric($_GET['n'])) {
	        $qno = $_GET['n'];
	        if ($qno == 1) {
	        	$_SESSION['quiz'] = 1;
	        }
	        }
	        else {
	        	header('location: question.php?n='.$_SESSION['quiz']);
	        } 
	        if (isset($_SESSION['quiz']) && $_SESSION['quiz'] == $qno) {
			$query = "SELECT * FROM questions WHERE qno = '$qno'" ;
			$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
			if (mysqli_num_rows($run) > 0) {

				
##soruları ve cevapları yazdır.
				$row = mysqli_fetch_array($run);
				$qno = $row['qno'];
                 $question = $row['question'];
                 $ans1 = $row['ans1'];
                 $ans2 = $row['ans2'];
                 $ans3 = $row['ans3'];
                 $ans4 = $row['ans4'];
                 $correct_answer = $row['correct_answer'];
                 $_SESSION['quiz'] = $qno;
                 $checkqsn = "SELECT * FROM questions" ;
                 $runcheck = mysqli_query($conn , $checkqsn) or die(mysqli_error($conn));
                 $countqsn = mysqli_num_rows($runcheck);
                 $time = time();
                 $_SESSION['start_time'] = $time;
                 $allowed_time = $countqsn * 0.30;
                 $_SESSION['time_up'] = $_SESSION['start_time'] + ($allowed_time * 60) ;
                 

			}
			else {
				echo "<script> alert('something went wrong');
			window.location.href = 'home.php'; </script> " ;
			}
		}
		else {
		echo "<script> alert('error');
			window.location.href = 'home.php'; </script> " ;
	}
?>
<?php 
$total = "SELECT * FROM questions ";
$run = mysqli_query($conn , $total) or die(mysqli_error($conn));
$totalqn = mysqli_num_rows($run);

?>
<html>
	<head>
		<title>PHP-kuiz</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1>Assesment Tool</h1>
			</div>
		</header>
		<?php if (!empty($_SESSION['datas'])) { 
			
		} ?>
		<main>
			<div class= "container">
				<div class= "current">Question <?php echo $qno; ?> of <?php echo $totalqn; ?></div>
				<p class="question"><?php echo $question; ?></p>
				<form method="post" action="process.php">
					<ul class="choices">
						<?php $ans1exp = explode('^', $ans1); // ikiye ayır  ayırı  ?>
						<?php $ans2exp = explode('^', $ans2); ?>
						<?php $ans3exp = explode('^', $ans3); ?>
						<?php $ans4exp = explode('^', $ans4); ?>
					   <li><input name="choice" type="radio" value="<?= $ans1exp[1] //verisini çağırır (puan) ?>" required=""><?php echo $ans1exp[0]; //Ayrılan verinin sıfırıncı verisini çağır (soru) ?></li>
					   <li><input name="choice" type="radio" value="<?= $ans2exp[1] ?>" required=""><?php echo $ans2exp[0]; ?></li>
					   <li><input name="choice" type="radio" value="<?= $ans3exp[1] ?>" required=""><?php echo $ans3exp[0]; ?></li>
					   <li><input name="choice" type="radio" value="<?= $ans4exp[1] ?>" required=""><?php echo $ans4exp[0]; ?></li>
					 
					</ul>
					<input type="submit" value="Submit"> 
					<input type="hidden" name="number" value="<?php echo $qno;?>">
					<br>
					<br>
					<a href="results.php" class="start">Stop Test</a>
				</form>
			</div>
		</main>
</body>
</html>

<?php } 
else {
	header("location: home.php");
}
?>