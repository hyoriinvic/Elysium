// DOM - if else - Function practice two

const title = document.querySelector("#title");
const CLICKED_CLASS = "clicked";

funciton handleClick() {
    const currentClass = title.className;
    if(currentClass !== CLICKED_CLASS) {
        title.className = CLICKED_CLASS;
    } else {
        title.className = "";
    }
}

function init() {
    title.addEventListener("click", handleClick);
}

init();