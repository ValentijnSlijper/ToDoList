<?php
include "db-connect.php";

if(isset($_POST['submit']))
{
    $lijstnaam = $_POST['lijst'];

    $insert = "INSERT INTO `lijst`(`name`) VALUES (:name)";

    $insert_run = $insert->prepare($insert);

    $insert_exec = $insert_run->execute(array(":name"=>$lijstnaam))

    if(!$insert_exec)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

// mysqli_close($db); // Close connection
?>
