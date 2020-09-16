// JS DOM Functions
// DOM: Document Object Module

// html 을 Javascript의 DOM 객체를 사용하여 바꿈
const title = document.getElementById("title");
title.innerHTML = "Hi! From JS";

// Modifying the DOM with JS 
console.dir(title);
title.style.color = "red";
document.title = "I own you now."

/*
const title = document.querySelector("#title");
.querySelector: 노드의 첫 번째 자식을 반환?
id 로 선택: #title (css 연산자와 같음)
*/

// Events and event handlers 
// Events: click, resize, load... anything happen in website
function handleResize(){
    // console.log(event); event 를 출력 - 나중에 유용
    console.log("I have been resized");
}

window.addEventListener("resize", handleResize); // 함수를 바로 호출 X 

function handleClick(){
    title.style.color = "blue";
}

title.addEventListener("click", handleClick);