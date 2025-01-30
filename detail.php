<?php
    $level = './';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './elements/head.php'; ?>
    <title>Personal Details</title>
</head>
<body>
    <div class="container">
        <?php require_once './elements/header.php'; ?>
        <div class="seperate"></div>
        <div class="allWrapperDetails">
            <div class="lineAndTitleWrapper">
                <div class="lineNoTitle"></div>
                <div class="aboutMeTitleWrapper">
                    <h1 class="aboutMeTitleMain">Who am I?</h1>
                </div>
                <div class="lineNoTitle"></div>
            </div>
            <div class="informationWrapper">
                <div class="detailWrapper">
                    <div class="titleWrapper">
                        <div class="introWrapper">
                            <div class="symbolWrapper">
                                <i class="fa-solid fa-file-signature" id="name"></i>
                            </div>
                        </div>
                        <h1 class="introInfo">Name: </h1>
                        <h1 class="mainInfo">Do Nguyen Phu</h1>
                    </div>
                    <div class="titleWrapper">
                        <div class="introWrapper">
                            <div class="symbolWrapper">
                                <i class="fa-solid fa-cake-candles" id="birthdayCake"></i>
                            </div>
                        </div>
                        <h1 class="introInfo">Birth: </h1>
                        <h1 class="mainInfo">15/02/2008</h1>
                    </div>
                    <div class="titleWrapper">
                        <div class="introWrapper">
                            <div class="symbolWrapper">
                                <i class="fa-solid fa-school" id="school"></i>
                            </div>
                        </div>
                        <h1 class="introInfo">High school :</h1>
                        <a href="https://thptchuyentranphu.haiphong.edu.vn/homegd2" id="ctp">Tran Phu High School for the Gifted</a>
                    </div>
                    <div class="titleWrapper">
                        <div class="introWrapper">
                            <div class="symbolWrapper">
                                <i class="fa-solid fa-heart" id="heart"></i>
                            </div>
                        </div>
                        <h1 class="introInfo">Hobbies :</h1>
                        <h1 class="mainInfo">Programming, coding</h1>
                    </div>
                    <div class="titleWrapper">
                        <div class="introWrapper">
                            <div class="symbolWrapper">
                                <i class="fa-brands fa-github" id="github"></i>
                            </div>
                        </div>
                        <h1 class="introInfo">Github :</h1>
                        <a href="https://github.com/donguyenphu" id="githubLink">
                            <div class="myGithubProject">
                                donguyenphu
                            </div>
                        </a>
                    </div>
                    <div class="quoteWrapper">
                        <h1 class="quoteMainFirstHalf">
                            Even after my dopamine depleted
                        </h1>
                        <h1 class="quoteMainSecondHalf">
                            I can't stop doing <a href="https://en.wikipedia.org/wiki/Competitive_programming" id="cp">Competitive programming</a>
                        </h1>
                    </div>
                </div>
                <div class="imageWrapper">
                    <img src="./images/371849340_1124344331921704_4474037471854140439_n.jpg" class="imageMain">
                </div>
            </div>
        </div>
    </div>
</body>
</html>