<?php
session_start();
require_once 'events/connect.php';
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
        <div class="profileHead">
            <div class="profileTag">

            </div>
            <div class="profileAvatar">
                <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
            </div>
            <div class="nickname">

                <div class="profileDescription">
                <h1 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h1>
                    <p href="#"><?= $_SESSION['user']['email'] ?></p>
                    <p>Searching for work in motion design industry</p>
                    <p>#MotionDesign #VideoMontage</p>
                </div>
            </div>
            <a class="addCaseBut" href="#addCase">+ ADD CASE</a>
        </div>
    </header>
    <section>
    <form action="events/addcase.php" method="post" enctype="multipart/form-data">
    <div class="caseGrid"> 
    
        <?php 
        $casecreator = mysqli_query($connect, "SELECT * FROM `casecreator` ORDER BY `casecreator`.`id` DESC");
        
        $casecreator = mysqli_fetch_all($casecreator);

        
        foreach ($casecreator as $cases) {
            ?>
            <script>
            if(<?=$cases[0]?> == 0)
                {
                    document.getElementsByClassName('caseGrid').style.visibility='hidden';
                }
        </script>    
        
            <div class="case">
                <div class="caseOpen" id="<?= $cases[0]?>">
                    <a href="casepage.php?id=<?=$cases[0]?>"><img src="<?=$cases[3]?>" alt="case preview photo"></a>
                    <h3 style ="text-align: center;"><?=$cases[1]?></h3>
                </div>
            </div>
            <?php
        }
        ?>
        </div>

        <div>

        </div>

    </section>



    <div class="addCase" id="addCase">
        <a href=""><img src="images/exitcross.png" alt="close cross" class="exitCross"></a>
        <div class="popupContainer">
            <div class="title">Create new case</div>

            <label for="name">Name</label><br>
            <input class="formInput" id="name" type="text" name="headname" autofocus required><br>

            <label for="description">Description</label><br>
            <input class="formInput" id="description" type="text" name="description" autofocus required><br>

            <label for="media">Add media</label><br>
            

            <p><input type="file" accept="image/*" name="name1" id="file1" onchange="loadFile(event)"
                    style="display: none;"></p>
            <p><label for="file1" style="cursor: pointer;">Upload Image 1 </label></p>
            <p><img id="output1" width="200" /></p>

            <script>
                var loadFile = function (event) {
                    var image = document.getElementById('output1');
                    for(var ev of event.target.files) {
                    image.src = URL.createObjectURL(ev);
                }
                };
            </script>

            <p><input type="file" accept="image/*" name="name2" id="file2" onchange="loadFile2(event)"
                    style="display: none;"></p>
            <p><label for="file2" style="cursor: pointer;">Upload Image 2 </label></p>
            <p><img id="output2" width="200" /></p>
            
            <script>
                var loadFile2 = function (event) {
                    var image = document.getElementById('output2');
                    for(var ev of event.target.files) {
                    image.src = URL.createObjectURL(ev);
                }
                };
            </script>

            <p><input type="file" accept="image/*" name="name3" id="file3" onchange="loadFile3(event)"
                    style="display: none;"></p>
            <p><label for="file3" style="cursor: pointer;">Upload Image 3 </label></p>
            <p><img id="output3" width="200" /></p>
            
   
            <script>
                var loadFile3 = function (event) {
                    var image = document.getElementById('output3');
                    for(var ev of event.target.files) {
                    image.src = URL.createObjectURL(ev);
                }
                };
            </script>

            <div class="submitButton">
                <a href=""><input type="submit" value="Add" class="submitButton addCaseButton" href=""></a>
            
            </div>

        </div>

    </div>

</form>
    <div class="modal-overlay"></div>
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