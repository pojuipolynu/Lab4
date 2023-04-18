<!DOCTYPE html>
<html lang="uk">

<head>
	<title>Домашня сторінка</title>
	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="header.css">
	<style>
		<?php
		$page = $_GET['page'];
		$style = 0;
		if ($page == 'index1') {
			include 'style.css';
			$style = 1;
		} elseif ($page == 'index2') {
			include 'style1.css';
			$style = 1;
		} elseif ($page == 'index3') {
			include 'style2.css';
			$style = 1;
		} elseif ($page == 'index4') {
			include 'style4.css';
			$style = 1;
		}
		if ($style == 0){
			include 'style.css';
		}
		?>
	</style>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php
	if (isset($_GET['page'])) {
		$page = stripslashes($_GET['page']);
	} else {
		$page = 'index1';
	}
	require "header.php";
	require "$page.php";
	require "footer.php";
	?>