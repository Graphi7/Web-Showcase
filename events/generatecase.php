<?php
    session_start();
    require_once 'events/connect.php';
    $case_id = $_GET['id'];
    $thispage = mysqli_query($connect, "SELECT * FROM 'casecreator' WHERE 'id' = '$case_id'");
    $thispage = mysqli_fetch_assoc($thispage)
?>