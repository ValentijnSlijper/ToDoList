<?php
	require("db-connect.php");
	include("read.php");
	require("functions.php");
	dataConn();
	$lists = getLists();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="STYLESHEET" href="style.css" type="text/css">
	<script src="https://kit.fontawesome.com/df923f75a1.js" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
	<nav>
		<h1 class="lijst1"><a href="makelist.php">New list</a></h1>
	</nav>
	 <h1 class="lijst1">Your lists</h1>
	 <div class="lijsten">
	 <?php foreach ($lists as $list) {
		 ?><p class="lijst2"><?php
	 	echo $list["name"]; ?>
		<p>
			<?php
	} ?>
</div>
</html>
