<?php
include "db-connect.php";

 function createLijst(){
   $conn = dataConn();
   $query = $conn->prepare("INSERT INTO `lijst` (name) VALUES (:name)");
   $query->bindParam(":name", $_POST['lijst']);
   $query->execute();
 }

 createLijst();


 //mysqli_close($conn); // Close connection
?>
