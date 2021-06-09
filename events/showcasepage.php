<?php

require_once 'connect.php';

$id = $_POST['id'];
$headname = $_POST['headname'];
$description = $_POST['description'];
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$name3 = $_POST['name3'];

mysqli_query($connect, "SELECT `headname`,`description`,`name1`,`name2`,`name3` FROM `casecreator` WHERE `products`.`id` = '$id'");
