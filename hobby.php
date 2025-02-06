<?php
    $level = './';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './elements/head.php'; ?>
    <title>My Hobbies</title>
</head>
<body>
    <div id="preloader"></div>
    <div class="container">
        <?php require_once './elements/header.php'; ?>
        <div class="seperate"></div>
        <div class="allWrapperDetails">
            <!--1.certificate: ielts, coursera, ameb,  -->
            <!-- 2.prizes: 2piano, 2chemistry , 1it-->
            <div class="lineAndTitleWrapper">
                <div class="lineNoTitle"></div>
                <div class="aboutMeTitleWrapper">
                    <h1 class="aboutMeTitleMain">My hobbies</h1>
                </div>
                <div class="lineNoTitle"></div>
            </div>
            <button  class = "buttonHobbies"><i class="fa-solid fa-chevron-down" id = "hobbyOne"></i></button>
            <div class="CertificateNumberWrapper">
                <h1 class="CertificateNumberMain">Coding</h1>
            </div>
            <div class="descriptionHobbies" id="hobbyFirst">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus deserunt, quaerat necessitatibus beatae ullam qui doloremque error doloribus quo enim?
            </div>
            <button id = "hobbyTwo" class = "buttonHobbies"><i class="fa-solid fa-chevron-down"></i></button>
            <div class="CertificateNumberWrapper">
                <h1 class="CertificateNumberMain">Piano</h1>
            </div>
            <div class="descriptionHobbies" id = "hobbySecond">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi illum non quibusdam minima quisquam vero nemo autem unde voluptatibus nihil?
            </div>
            <button id = "hobbyThree" class = "buttonHobbies"><i class="fa-solid fa-chevron-down"></i></button>
            <div class="CertificateNumberWrapper">
                <h1 class="CertificateNumberMain">Playing football</h1>
            </div>
            <div class="descriptionHobbies" id = "hobbyThird">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam itaque maiores officia iusto ipsa hic cum, fugit at eligendi eos!
            </div>
        </div>
    </div>
    <script src = "./loader/loader.js"></script>
    <script src = "./loader/darkmode.js"></script>
    <script src = "./loader/hideShow.js"></script>
    <script src = "./loader/imgSlide.js"></script>
</body>
</html>