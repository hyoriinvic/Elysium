const form = document.querySelector(".js-form"),
    input = form.querySelector("input");

const PATIENT_LS = "currentPatient",
    PHONE_LS = "patientPhone",
    SHOWING_CN = "showing";

function saveName(text) {
    localStorage.setItem(PATIENT_LS, text);
}

function savePhone(text) {
    localStorage.setItem(PHONE_LS, text);
}

function handleSubmitName(event) {
    event.preventDefault();
    const currentValue = input.patientName;
    saveName(currentValue);
}

function handleSubmitPhone(event) {
    event.preventDefault();
    const currentValue = input.patientPhone;
    savePhone(currentValue);
}

function askForName() {
    main.classList.add(SHOWING_CN);
    main.addEventListener("submit", handleSubmitName);
}

function askForPhoneNumber() {
    main.classList.add(SHOWING_CN);
    main.addEventListener("submit", handleSubmitPhone);
}

function patientInfo() {
    const currentPatient = localStorage.getItem(PATIENT_LS);
    const patientPhone = localStorage.getItem(PHONE_LS);
    if (currentPatient === null) {
        askForName();
    }
    if (patientPhone === null) {
        askForPhoneNumber();
    }
}

function init() {
    patientInfo();
}

init();