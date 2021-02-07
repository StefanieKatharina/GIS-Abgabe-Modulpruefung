<?php

$mysqli = new mysqli("localhost", "steffi", "steffi", "Steffi");
    $insert="UPDATE artikel SET verfuegbar= 0 WHERE id = '".$_POST['id']."'";
    $insert2="UPDATE artikel SET email='".$_POST['email']."' WHERE id = '".$_POST['id']."'";

$mysqli->query($insert);
$mysqli->query($insert2)

?>