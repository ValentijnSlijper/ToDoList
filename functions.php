<?php
function getLists(){
  $conn = dataConn();
  $query = $conn->prepare("SELECT * FROM `lijst`");
  $query->execute();
  return $query;
}

 ?>
