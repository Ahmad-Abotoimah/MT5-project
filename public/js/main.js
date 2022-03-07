const container = document.querySelector(".altbody");
const wraper = document.querySelector(".altWRAPER");
const langBtn = document.querySelector(".aref");
const phoneInput = document.querySelector("#phone-valid");
const phoneError = document.querySelector(".phone-isvalid");
const reg = new RegExp("^[0-9]+$");

if (langBtn.innerHTML == "en") {
    wraper.style.gap = "3rem";
    container.style.direction = "rtl";
    console.log('asdasdasd');
} else {
    wraper.style.gap = "0";
    wraper.style.fontFamily = "Noto Kufi Arabic";
    container.style.direction = "ltr";
}
console.log(phoneInput.value);
phoneInput.onkeyup = () => {
    if (!phoneInput.value.match(reg)) {
        phoneError.innerHTML = "You Should use only numbers";
    } else {
        phoneError.innerHTML = "";
    }
};
