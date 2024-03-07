<?php
include('../connect.php');
session_start();
if (isset($_SESSION['email'])) {
    $user_email = $_SESSION['email'];
    // echo $user_email;
    // extract($_POST);

    $sql = "SELECT first_name,last_name,email,uid  FROM users WHERE email = '$user_email' ";

    $result = $conn->query($sql);

    $get_users = $result->fetch_assoc();
    $json = json_encode($get_users);

    echo "<script> console.log($json) </script>";

}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/user/course.css">

</head>

<body>
    <div class="container_nav">
        <header class="header">
            <section class="sec">
                <div class="logo-container">
                    <a href="home.php">
                        <img src="../img/logo-removebg-preview.png" alt="Vidya Vriddhi" class="logo-img">
                    </a>
                </div>
                <form action="" method="POST" class="form">
                    <input type="text" placeholder="search course">
                    <button type="submit" class="fas fa-search" name="search_box"></button>
                </form>
                <div class="icons">
                    <div id="menu_btn" class="fas fa-bars"></div>
                    <div id="search_btn" class="fas fa-search"></div>
                    <!-- <div class="popup" onclick="togglePopUp()">

                    <i id="user_btn" class="fas fa-user">
                        <span class="popuptext" id="myPopup">Rishi</span>
                        <span class="popuptext" id="myPopup">pramod</span>
                </div> -->

                </div>
            </section>
    </div>

    </header>
    <div class="containers_main">
        <div class="side-bar">
            <div class="close-side-bar">
                <i class="fas fa-times"></i>
            </div>
            <div class="profile">
                <img src="" alt="">
                <h3>User</h3>
                <span>student</span>
                <a href="profile.php" class="btn">view profile</a>
            </div>
            <nav class="navbar">
                <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
                <a href="about.php"><i class="fas fa-question"></i><span>about us</span></a>
                <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
                <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
                <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
            </nav>

        </div>

        <div class="container_cointent">
            <!-- display of reviews -->
            <div class="containers_display">
                <form action="../server/experties/discuss.php" method="post">
                    <div class="container_learner">
                        <div class="comment_profile">
                            <img src="../img/head.jpg" />
                        </div>

                        <div class="comment_details">
                            <label>
                                <?php echo $get_users['first_name'] . ' ' . $get_users['last_name'] ?>
                            </label>
                            <input type="id" value="1" hidden>
                            <div class="ratings">
                                <span class="star rate" id="star1">⭐</span>
                                <span class="star rate" id="star2">⭐</span>
                                <span class="star rate" id="star3">⭐</span>
                                <span class="star rate" id="star4">⭐</span>
                                <span class="star rate" id="star5">⭐</span>
                            </div>

                            <textarea type="" textarea name="l_comment"
                                id="comment"><?php echo $get_users['email'] ?></textarea>
                            <button class="btn-primary takespace">Delete</button>
                        </div>
                    </div>
            </div>
            </form>


            <div class="containers_cmt">
                <form action="../server/experties/discuss.php" method="post">
                    <div class="container_learner">
                        <div class="comment_profile">
                            <img src="../img/head.jpg" />
                        </div>

                        <div class="comment_details">
                            <label>
                                <?php echo $get_users['first_name'] . ' ' . $get_users['last_name'] ?>
                            </label>
                            <input type="id" value="1" hidden>
                            <div class="ratings">
                                <span class="star rate" id="star1">⭐</span>
                                <span class="star rate" id="star2">⭐</span>
                                <span class="star rate" id="star3">⭐</span>
                                <span class="star rate" id="star4">⭐</span>
                                <span class="star rate" id="star5">⭐</span>
                            </div>
                            <textarea type="textarea" name="l_comment" id="comment"
                                placeholder="give your feedback"></textarea>
                            <button class="btn-primary takespace">Comment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

</body>

</html>