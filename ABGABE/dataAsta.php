<?php

$mysqli = new mysqli("localhost", "steffi", "steffi", "Steffi");
$insert="UPDATE artikel SET verfuegbar= 1 WHERE id = '".$_POST['id']."'";
$insert2="UPDATE artikel SET email=null WHERE id = '".$_POST['id']."'";
$mysqli->query($insert);
$mysqli->query($insert2);

?>