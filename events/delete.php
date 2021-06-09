<?php

require_once 'connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `casecreator` WHERE `casecreator`.`id` = '$id'");

header('Location: /profile.php');
?>