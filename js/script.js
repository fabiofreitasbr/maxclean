// FUNCIONAMENTO DO MENU
function toggleMenu () {
    document.querySelector('.hamburger').classList.toggle('is-active');
    document.getElementById('header-bar-mobile').classList.toggle('-right-full');
    document.getElementById('header-bar-mobile').classList.toggle('right-0');
}
var buttonMenu = document.getElementById("mobile-menu-hamburger");
if (buttonMenu) {
    buttonMenu.addEventListener('click', function () {
        toggleMenu();
    });
}
var buttonMenu = document.getElementById("header-bar-mobile-close");
if (buttonMenu) {
    buttonMenu.addEventListener('click', function () {
        toggleMenu();
    });
}

// CONVERSÕES
var actionBotao = function () {
    gtag('event', 'conversion', { 'send_to': 'AW-11434777744/qXoKCP_Gif8YEJC5w8wq' });
    console.log('conversion');
}
var actionForm = function () {
    gtag('event', 'conversion', { 'send_to': 'AW-11434777744/DlTJCJGQlv0YEJC5w8wq' });
    console.log('conversion');
}
const formConversion = document.querySelectorAll("form");
for (let i = 0; i < formConversion.length; i++) {
    formConversion[i].addEventListener('submit', function () {
        actionForm();
    });
}
const buttonConversion = document.querySelectorAll(".conversion-contact");
for (let i = 0; i < buttonConversion.length; i++) {
    buttonConversion[i].addEventListener('click', function () {
        actionBotao();
    });
}


const tabButtons = document.querySelectorAll(".tab-button");
const tabContent = document.querySelectorAll(".tab-content");
function modifyButton(current = false) {
    for (let i = 0; i < tabButtons.length; i++) {
        if (current === tabButtons[i].getAttribute('tab') || (current == false && i == 0)) { tabButtons[i].classList.add('!bg-white', '!text-blue-500'); }
        else { tabButtons[i].classList.remove('!bg-white', '!text-blue-500'); }
    }
}
function showTab(current = false) {
    for (let i = 0; i < tabContent.length; i++) {
        if (!current) { var addClass = (0 === i) ? "block" : "hidden"; var removeClass = (0 === i) ? "hidden" : "block"; }
        else { var addClass = (current === tabContent[i].getAttribute('tab')) ? "block" : "hidden"; var removeClass = (current === tabContent[i].getAttribute('tab')) ? "hidden" : "block"; }
        tabContent[i].classList.add(addClass);
        tabContent[i].classList.remove(removeClass);
        modifyButton(current);
    }
}
showTab();
for (let singleTab of tabButtons) {
    singleTab.addEventListener("click", function () {
        showTab(this.getAttribute('tab'));
    });
}
