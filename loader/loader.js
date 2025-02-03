let loader = document.getElementById("preloader");
let swipeRightWrapper = document.getElementById("swipeRightWrapper");
const themeSwitch = document.getElementById('theme-switch');
let darkMode = localStorage.getItem('darkmode');
let imageMainForImages = document.getElementById("imageMainForImages");
window.addEventListener('load', function() {
    setTimeout(function() {
        loader.style.display = 'none';
    }, 0); 
});


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

let tmp = 0;

let arrImgLink = ['./images/myImages0.jpg', './images/myImages1.jpg', './images/myImages2.jpg'];
let length = arrImgLink.length;
swipeRightWrapper.addEventListener("click", function () {
    console.log(tmp);
    tmp++;
    tmp %= length;
    imageMainForImages.src = arrImgLink[tmp];
});

