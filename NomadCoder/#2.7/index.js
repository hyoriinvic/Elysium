// DOM - if else - Function practice two

const title = document.querySelector("#title");
const CLICKED_CLASS = "clicked";

funciton handleClick() {
    const hasClass = title.classList.contains(CLICKED_CLASS);

    if(!hasClass) {
        title.classList.add(CLICKED_CLASS);
    } else {
        title.classList.remove(CLICKED_CLASS);
    }

    // 여기 안에 있는 코드를 한 줄로 표현하면
    // title.classList.toggle(CLICKED_CLASS);
}

function init() {
    title.addEventListener("click", handleClick);
}
init();