
// darkmode
let darkMode = localStorage.getItem('darkmode');
const themeSwitch = document.getElementById('theme-switch');
if (darkMode === "active") {
    console.log(1);
}
else {
    console.log(0);
}


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