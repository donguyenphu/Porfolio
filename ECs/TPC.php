<?php
    $level = '../';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../elements/head.php'; ?>
    <title>Activities and Events</title>
</head>
<body>
    <div id="preloader"></div>
    <div class="container">
        <?php require_once '../elements/header.php'; ?>
        <div class="seperate"></div>
        <div class="allWrapperDetails">
            <div class="lineAndTitleWrapper">
                <div class="lineNoTitle"></div>
                <div class="aboutMeTitleWrapper">
                    <h1 class="aboutMeTitleMain">My Activities</h1>
                </div>
                <div class="lineNoTitle"></div>
            </div>
            <div class="outlineActivitiesWrapper">
                <div class="angelICMprojectWrapper">
                    <p class="angelICMprojectMain">
                        Formerly a science research club of Tran Phu High School for the Gifted, TPCircle participates in famous robotics competitions in many places. After  3 rounds: Application round, Interview round, and Teamwork round, the candidate is chosen to be the official member of the club
                    </p>
                </div>
                <div class="imageStorageNoJSWrapper">
                    <div class="imageOnlyNoJSWrapper" style="width: 33%;">
                        <img src="../images/tpcircleLogo.jpg" class="imageOnlyNoJSMain">
                    </div>
                    <div class="imageOnlyNoJSWrapper" style="width: 33%;">
                        <img src="../images/tpcircleFTC.jpg" class="imageOnlyNoJSMain">
                    </div>
                    <div class="imageOnlyNoJSWrapper" style="width: 33%;">
                        <img src="../images/tpcircle2024.jpg" class="imageOnlyNoJSMain">
                    </div>
                </div>
                <div class="descriptionWrapper">
                    <p class ="text1main">
                        I joined the club just in time for the important upcoming robotics competition: FIRST Tech Challeneg 2024-2025. The competition consisted of robotics team from all over Vietnam and also teams from Thailand, Indonesia and Laos. Despite limited funding and no mentor, we still enjoyed and thrived on hard-working, self-learning and cooperation
                    </p>
                </div>
                <div class="imageStorageNoJSWrapper">
                    <div class="imageOnlyNoJSWrapper" style="width: 100%;">
                        <img src="../images/tpcircleFTC2.jpg" class="imageOnlyNoJSMain">
                    </div>
                </div>
                <div class="descriptionWrapper">
                    <p class ="text1main">
                        The second competition we participated in is FPTU AI & Robotics Challenge 2025. With the participation of 591 teams from all over Vietnam, the robotics team will be divided to compete the AI round in corresponding FPT headquarter. Ranked 88 out of 220 teams to go to the robotics round, we are actively preparing for the next round.
                    </p>
                </div>
                <div class="imageStorageNoJSWrapper">
                    <div class="imageOnlyNoJSWrapper" style="width: 50%;">
                        <img src="../images/tpcircleFARCjpg.jpg" class="imageOnlyNoJSMain">
                    </div>
                    <div class="imageOnlyNoJSWrapper" style="width: 50%;">
                        <img src="../images/FARC2.jpg" class="imageOnlyNoJSMain" style="width: 100%;">
                    </div>
                </div>
                <div class="descriptionWrapper">
                    <a href = "../imageStorage/TPCstorage.php">
                        <p class ="text1main center">
                            <strong>See more images about our images in robotics competitions here!</strong>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="popUp">
        <div class="popup">
            <span class="close"><i class="fa-solid fa-xmark"></i></span>
            <img src="" class="popUpImage">
        </div>
    </div>
    <?php require_once '../elements/script.php';?>
</body>
</html>