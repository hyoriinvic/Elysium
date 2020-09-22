//.querySelector: 찾은 첫 번째 것을 가져 옴 (클래스, 태그, 아이디)  
//.querySelectorAll: 모든 걸 가져옴? ex. 클래스 명에 따른 엘리먼트들 > Array 형태로 반환
//.getElementByID
//.getElementByTagName: 태그로 엘리먼트를 가져옴 ex. input, body, html, div, section

const form = document.querySelector(".js-form"),
    input = form.querySelector("input"),
    greeting = document.querySelector(".js-greetings");

const USER_LS = "currentUser",
    SHOWING_CN = "showing";

//저장
function saveName(text){
    localStorage.setItem(USER_LS, text);
}

function handleSubmit(event){
    event.preventDefault();
    const currentValue = input.value;
    paintGreeting(currentValue);
    saveName(currentValue);
}

//User의 이름을 물어보는 함수
function askForName(){
    form.classList.add(SHOWING_CN);
    form.addEventListener("submit", handleSubmit);
}

//User에게 인사하는 함수
function paintGreeting(text){
    form.classList.remove(SHOWING_CN);
    greeting.classList.add(SHOWING_CN);
    greeting.innerText =`Hello ${text}`;
}

//localStorage: 정보를 유저 컴퓨터에 저장하는 방법
//localStorage에서 currentUser을 가져오는 함수
function loadName(){
    const currentUser = localStorage.getItem(USER_LS);

    if(currentUser === null){
        //저장된 값이 없으면, 이름을 물어보고
        askForName();
    } else {
        //저장된 값이 있으면, 인사!
        paintGreeting(currentUser);
    }
}

function init(){
    loadName();
}

init();