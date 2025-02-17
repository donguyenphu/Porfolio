let popUpImage = document.querySelector(".popUpImage");
let imageOnlyNoJSWrapper = document.querySelector(".imageOnlyNoJSWrapper");
let imageOnlyNoJSMain = document.querySelectorAll(".imageOnlyNoJSMain");
let popUp = document.querySelector(".popup");
let popUpWrapper = document.querySelector('popUp');
let closeUp = document.querySelector('.close');

imageOnlyNoJSMain.forEach(image => {
    image.onclick = () => {
        popUp.style.display = 'block';
        popUpImage.src = image.getAttribute('src');
    }
});
closeUp.onclick = () => {
    popUp.style.display = 'none';
}