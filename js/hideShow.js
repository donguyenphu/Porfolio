/// button hide and show
let descriptionHobbies = document.getElementsByClassName("descriptionHobbies");
let buttonHobbies = document.getElementsByClassName("buttonHobbies");

console.log(buttonHobbies);

Array.from(buttonHobbies).forEach((element, index) => {
    
    element.addEventListener('click', function() {
        if (descriptionHobbies[index].style.display === 'none') {
            descriptionHobbies[index].style.display = 'block';
            requestAnimationFrame(() => {
                descriptionHobbies[index].style.opacity = "1";
                descriptionHobbies[index].style.transform = "scale(1)";
            });
            buttonHobbies[index].innerHTML = '<i class="fa-solid fa-chevron-down" id = "hobbyOne"></i>';
        }
        else {
            descriptionHobbies[index].style.opacity = "0";
            descriptionHobbies[index].style.transform = "scale(0.9)";
            descriptionHobbies[index].addEventListener("transitionend", function handler() {
                descriptionHobbies[index].style.display = "none";
                descriptionHobbies[index].removeEventListener("transitionend", handler);
            });
            buttonHobbies[index].innerHTML = '<i class="fa-solid fa-chevron-up" id = "hobbyOne"></i>';
        }
    })
});