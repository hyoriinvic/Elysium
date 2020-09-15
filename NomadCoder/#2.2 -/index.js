// JS DOM Functions
// DOM: Document Object Module

// html 을 DOM 객체를 사용하여 바꿈
const title = document.getElementById("title");
title.innerHTML = "Hi! From JS";

// Modifying the DOM with JS 
console.dir(title);
title.style.color = "red";
document.title = "I own you now."

const title = document.querySelector("#title") // id 로 찾기? 