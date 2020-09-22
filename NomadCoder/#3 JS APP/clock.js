// .querySelector: element 의 자식(child) 탐색
//클래스명이 js-clock인 것을 탐색
const clockContainer = document.querySelector(".js-clock"), 
 clockTitle =  clockContainer.querySelector("h1"); //clock 클래스의 자식을 탐색

//시계 생성: 시각을 가져오는 함수
function getTime(){
    const date = new Date(); //Object
    const hours = date.getHours();
    const minutes = date.getMinutes();
    const seconds = date.getSeconds();

    //삼항 연산자
    //(조건) ? True : False
    //00:00:00 꼴로 만들기 위해 사용
    clockTitle.innerText = `${hours < 10 ? `0${hours}` : hours}:${minutes < 10 ? `0${minutes}` : minutes}:${seconds <10 ? `0${seconds}` : seconds}`; 
}

function init(){
    getTime(); 
    setInterval(getTime, 1000); //setInterval(fn, milliseconds): 시간 간격마다 함수 실행
}

init();