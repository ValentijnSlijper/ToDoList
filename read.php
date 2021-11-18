<?php

   function getList(){
            $conn = dataConn();
            $query = $conn->prepare("SELECT * FROM `lijst`");
            $query->execute();
            $list = $query->fetchall();
            return $list;
        }

    function getTasks($id){
            $conn = dataConn();
            $query = $conn->prepare("SELECT * FROM `tasks` WHERE listid = :listid ");
            $query->bindParam(":listid", $id);
            $query->execute();
            $tasks = $query->fetchall();
            return $tasks;
        }

?>
