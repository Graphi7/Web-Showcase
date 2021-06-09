<?php
    session_start();
    require_once 'connect.php';

    $headname = $_POST['headname'];
    $description = $_POST['description'];


        $path1 = 'uploads/' . time() . $_FILES['name1']['name'];
        if (!move_uploaded_file($_FILES['name1']['tmp_name'], '../' . $path1)) {
            $_SESSION['msg'] = 'Помнилка!';
        }
        $path2 = 'uploads/' . time() . $_FILES['name2']['name'];
        if (!move_uploaded_file($_FILES['name2']['tmp_name'], '../' . $path2)) {
            $_SESSION['msg'] = 'Помнилка!';
        }
        $path3 = 'uploads/' . time() . $_FILES['name3']['name'];
        if (!move_uploaded_file($_FILES['name3']['tmp_name'], '../' . $path3)) {
            $_SESSION['msg'] = 'Помнилка!';
        }

        mysqli_query($connect, "INSERT INTO `casecreator` (`id`, `headname`, `description`, `name1`, `name2`, `name3`) VALUES (NULL, '$headname', '$description', '$path1', '$path2', '$path3')");

        header('Location: ../profile.php');
?>
