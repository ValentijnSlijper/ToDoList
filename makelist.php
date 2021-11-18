<?php
	require "db-connect.php";
	// checks if you're logged in

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Voeg lijst toe</h1>
<form name="create" method="post" action="createlist.php">
	<input type="text" name="lijst" placeholder="Lijst naam...">
	<input type="submit" value="Create!">
</form>
  </body>
</html>
