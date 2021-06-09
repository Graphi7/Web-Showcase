<?php
    session_start();
    require_once 'events/connect.php';

    $case_id = $_GET['id'];
    $thispage = mysqli_query($connect, "SELECT `headname`,`description`,`name1`,`name2`,`name3` FROM `casecreator` WHERE `casecreator`.`id` = '$case_id'");
    $thispage = mysqli_fetch_assoc($thispage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Digital Showcase</title>
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="icon" href="" type="">
	<link rel="shortcut icon" href="" type=""> 
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header id="profileHeader" class="header">
        <div class="container">
            <div class="nav">
                <!-- <img src="" alt="Digital Showcase" class="logo"> -->
                <ul class="menu">
                    <li>
                        <a href="index.html#">MAIN PAGE</a>
                    </li>
                    <li>
                        <a href="profile.html#">ABOUT</a>
                    </li>
                    <li>
                        <a href="search.html#">SEARCH</a>
                    </li>
                </ul>
                <ul class="reg">
                    <li>
                    <a href="events/logout.php" class="logout">Log out</a>
                    </li>
                </ul>
            </div>
        </div>

    </header>
	    
        <div class="deleteButton" id="casedel">
        <a class="submitButton addCaseButton" href="events/delete.php?id=<?= $case_id ?>">Delete</a>       
        </div>
        <div class="caseProfileHolder">
		    <p>HOLDER</p>
	    </div>
	<div class="caseProfileInfo">
		<div class="caseAvatar">
        <a href="profile.php"><img src="<?= $_SESSION['user']['avatar'] ?>" alt="Avatar"></a>
		</div>			
	</div>
	<div class="caseProfileName">
	    <p><?= $_SESSION['user']['full_name'] ?></p>
	</div>
    <div>
    
<form action="" method="post" enctype="multipart/form-data">

    <h1 class="casepagename"><?= $thispage['headname'] ?></h1>   
    </div>

    <div class = "casepagedesc">
        <p><?= $thispage['description'] ?></p>
    </div>
    <div class = "casepagemedia">
    <img src="<?= $thispage['name1'] ?>" alt="case media 1">
    <img src="<?= $thispage['name2'] ?>" alt="case media 2">
    <img src="<?= $thispage['name3'] ?>" alt="case media 3">
    </div>
</form> 


	
<footer id="footer" class="footer">
		<div class="container">
			<div class="footer-text">
				<p>
					©2021 - KNU
				</p>
				<p>
					Tonoyan Danilo PP-32
				</p>
			</div>
		</div>
	</footer>
</body>
</html>