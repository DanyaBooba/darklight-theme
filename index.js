let btnLight = document.getElementById('changethemelight');
let btnDark = document.getElementById('changethemedark');
let btnAuto = document.getElementById('changethemeauto');

let light = document.getElementById('stylesheetlight');
let dark = document.getElementById('stylesheetdark');

function ButtonAuto() {
    MainControl('auto');
}

function ButtonLight() {
    MainControl('light');
}

function ButtonDark() {
    MainControl('dark');
}

function MainControl(theme) {
    if (theme === "light") {
        ChangeStatusButtonLight();
        ChangeStatusLight();
    } else if (theme === "dark") {
        ChangeStatusButtonDark();
        ChangeStatusDark();
    } else {
        ChangeStatusButtonAuto();
        ChangeStatusAuto();
    }
}

function ChangeStatusAuto() {
    localStorage.removeItem('color-theme');
    light.media = "(prefers-color-scheme: light)";
    dark.media = "(prefers-color-scheme: dark)";
}

function ChangeStatusButtonDark() {
    ClearAllClasses();
    btnDark.classList.add('btn-dark');
    btnLight.classList.add('btn-light');
    btnAuto.classList.add('btn-light');
}

function ChangeStatusLight() {
    localStorage.setItem('color-theme', 'light');
    light.media = "all";
    dark.media = "not all";
}

function ChangeStatusButtonLight() {
    ClearAllClasses();
    btnLight.classList.add('btn-dark');
    btnDark.classList.add('btn-light');
    btnAuto.classList.add('btn-light');
}

function ChangeStatusDark() {
    localStorage.setItem('color-theme', 'dark');
    light.media = "not all";
    dark.media = "all";
}

function ChangeStatusButtonAuto() {
    ClearAllClasses();
    btnAuto.classList.add('btn-dark');
    btnDark.classList.add('btn-light');
    btnLight.classList.add('btn-light');
}

function ClearAllClasses() {
    btnDark.classList.remove('btn-dark');
    btnDark.classList.remove('btn-light');
    btnLight.classList.remove('btn-dark');
    btnLight.classList.remove('btn-light');
    btnAuto.classList.remove('btn-dark');
    btnAuto.classList.remove('btn-light');
}

if (localStorage.getItem('color-theme')) {
    MainControl(localStorage.getItem('color-theme'));
}
else {
    MainControl('auto');
}