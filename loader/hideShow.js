/// button hide and show
let firstHobby = document.getElementById("hobbyFirst");
let secondHobby = document.getElementById("hobbySecond");
let thirdHobby = document.getElementById("hobbyThird");
let hobbyOne = document.getElementById("hobbyOne");
let hobbyTwo = document.getElementById("hobbyTwo");
let hobbyThree = document.getElementById("hobbyThree");
hobbyOne.addEventListener('click', function() {
    if (firstHobby.style.display === 'none') {
        firstHobby.style.display = 'block';
    }
    else {
        firstHobby.style.display = 'none';
    }
});
hobbyTwo.addEventListener('click', function() {
    if (secondHobby.style.display === 'none') {
        secondHobby.style.display = 'block';
    }
    else {
        secondHobby.style.display = 'none';
    }
});
hobbyThree.addEventListener('click', function () {
    if (thirdHobby.style.display === 'none') {
        thirdHobby.style.display = 'block';
    }
    else {
        thirdHobby.style.display = 'none';
    }
});