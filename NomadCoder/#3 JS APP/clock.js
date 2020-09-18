
const clockContainer = document.querySelector(".js-clock");
const clockTitle =  clockContainer.querySelector("h1"); 

//시계 생성
function getTime(){
    const date = new Date();
    const hours = date.getHours();
    const minutes = date.getMinutes();
    const seconds = date.getSeconds();

    clockTitle.innerText = `${hours < 10 ? `0${hours}` : hours}:${minutes < 10 ? `0${minutes}` : minutes}:${seconds <10 ? `0${seconds}` : seconds}`; //삼항 연산자 사용
}

function init(){
    getTime(); 
    setInterval(getTime, 1000); //시간 간격 설정(매 초마다 업데이트)
}

init();