<?php
    $level = './';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './elements/head.php'; ?>
    <title>PORFOLIO-MAIN PAGE</title>
</head>
<body class = "darkmode">
    <!-- <div id="preloader"></div> -->
    <div class="container">
        <?php require_once './elements/header.php'; ?>
        <button id="theme-switch">
            <!-- light -->
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="undefined"><path d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z"/></svg>
            <!-- dark -->
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="undefined"><path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z"/></svg>
        </button>
        <div class="seperate"></div>
        <div class="imageWrapperIndex">
            <img src="./images/371849340_1124344331921704_4474037471854140439_n.jpg" alt="avatar" class="image">
        </div>
        <div class="socialWrapper">
            <div class="socialElementWrapper">
                <a href="https://www.facebook.com/bestofsuy/" class="social"><i class="fa-brands fa-square-facebook"></i></a>
            </div>
            <div class="socialElementWrapper">
                <a href="https://twitter.com/" class="social"><i class="fa-brands fa-square-x-twitter"></i></a>
            </div>
            <div class="socialElementWrapper">
                <a href="https://www.instagram.com/phujk32/" class="social"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
            <div class="socialElementWrapper">
                <a href="https://www.linkedin.com/" class="social"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </div>
    <script src = "./loader/loader.js"></script>
    <script src="./darkLightMode/darkLight.js"></script>
</body>
</html>