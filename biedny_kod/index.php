<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>E-Podręczniki</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>

	<div id="container">
			<div id="header">
				<a href="index.php"><img src="pic/logo.png" alt="tu powinien znajdować się baner" /></a>
			</div>

			<div id="article">
				<p class="text" style="text-align:center;">
				Open AGH e-podręczniki to otwarte, bezpłatne e-podręczniki akademickie. Dla każdego! <br>

				Z otwartych e-podręczników AGH korzystać może każdy (student, wykładowca, uczeń, nauczyciel…) w wygodny dla siebie sposób - na tablecie, 
				telefonie, komputerze. Każdy może czytać, studiować, drukować, pobierać i przerabiać e-podręczniki według indywidualnych potrzeb i preferencji.
				E-podręczniki AGH są budowane z modułów - małych cegiełek wiedzy. W praktyce oznacza to, że możesz tworzyć własne e-podręczniki poprzez elastyczne 
				łączenie dostępnych modułów lub modyfikację istniejących e-podręczników opracowanych przez nauczycieli akademickich AGH.
				Otwarte podręczniki są opublikowane na zasadach licencji Creative Commons Uznanie autorstwa – Na tych samych warunkach. Dzięki temu można 
				je kopiować w całości lub fragmentach, rozpowszechniać i dokonywać zmian pod warunkiem dotrzymania zasad tej licencji.
				Nasze e-podręczniki są naprawdę otwarte - treści udostępniamy także w otwartych formatach, pozwalających na ich dowolną modyfikację.
				</p>
			</div>
			
			<div id="przedmiot">
			<a href="matematyka.html" class="przedmiot"> Matematyka </a> <br>
			<a href="materialoznawstwo.php" class="przedmiot"> Materiałoznawstwo </a> <br>
			<a href="chemia.html" class="przedmiot"> Chemia </a>
			</div>
			
			<div id="footer">
				<p id="copyright">&copy; Copyright 2018 Team_Front</p>
			</div>
	</div>
</body>
</html>