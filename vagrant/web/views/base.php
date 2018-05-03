<?php
	session_start();
	
    if(isset($_GET['action']) && $_GET['action'] == 'restart') {
		session_destroy();
		header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
	}
?>

<?php
	include('models/assets.mdl.php');
?>

<!doctype HTML>
<html>
	<head>
		<title>Le site dont vous êtes le Héros</title>
		<meta charset="utf-8" />
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet"> 
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>
		<?php include('views/templates/header.tmpl.php'); ?>
		<?php
			if(isset($_GET['start'])) {
				include('views/templates/settings-character.tmpl.php');
			} elseif(isset($_GET['question'])) {
				include('views/templates/questions.tmpl.php');
			} else {
				include('views/templates/choose-character.tmpl.php');
			}
		?>
		<?php include('views/templates/footer.tmpl.php'); ?>
	</body>
</html>
