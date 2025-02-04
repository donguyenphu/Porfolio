let loader = document.getElementById("preloader");
let swipeRightWrapper = document.getElementById("swipeRightWrapper");
let swipeLeftWrapper = document.getElementById("swipeLeftWrapper");
const themeSwitch = document.getElementById('theme-switch');
let darkMode = localStorage.getItem('darkmode');
let imageMainForImages = document.getElementById("imageMainForImages");
// preloader
window.addEventListener('load', function() {
    setTimeout(function() {
        loader.style.display = 'none';
    }, 500); 
});

// darkmode
const enableDark = () => {
    document.body.classList.add('darkmode');
    localStorage.setItem('darkmode', 'active');
}

const disableDark = () => {
    document.body.classList.remove('darkmode');
    localStorage.setItem('darkmode', null);
}


if (darkMode === "active") {
    enableDark();
}

themeSwitch.addEventListener("click", () => {
    darkMode = localStorage.getItem('darkmode');
    if (darkMode !== "active") {
        enableDark();
    }
    else {
        disableDark();
    }
});

// image container
let tmp = 0;

let arrImgLink = ['./images/myImages0.jpg', './images/myImages1.jpg', './images/myImages2.jpg'];
// let arrImgLink = ['./images/AMEB4.JPG', './images/AMEB5.PNG', './images/AMEB6.JPG'];

let length = arrImgLink.length;
swipeRightWrapper.addEventListener("click", function () {
    console.log(tmp);
    tmp++;
    tmp %= length;
    imageMainForImages.src = arrImgLink[tmp];
});

swipeLeftWrapper.addEventListener("click", function () {
    console.log(tmp);
    tmp = (!tmp ? length - 1 : tmp - 1);
    imageMainForImages.src = arrImgLink[tmp];
});

function loopSwipe() {
    imageMainForImages.src = arrImgLink[tmp];
    tmp++;
    tmp %= length;
}

setInterval(loopSwipe, 2500);



