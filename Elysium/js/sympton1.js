const buttons = document.getElementsByClassName("btn"),
symptonList = document.querySelector("js-symptonList");

const CLICKED_CLASS = "clicked"; 
const SYMPTON_LS = "symptons";

let symptons = [];

function handleClick(event) {
    event.preventDefault();

    // [].forEach.call(buttons, function(button){
        const hasClass = button.classList.contains(CLICKED_CLASS);
        if (hasClass) {
        button.classList.remove(CLICKED_CLASS);
    } else {
        button.classList.add(CLICKED_CLASS);
    }
    // });
}

function deleteSymptons(event){
    const btn = event.target;
    const li = btn.parentNode;
    symptonList.removeChild(li);

    const cleanSymptons = symptons.filter(function(sympton){
        return sympton.id !== parseInt(li.id);
    });
    symptons = cleanSymptonsl
    saveSymptons();
}

function saveSymptons(){
    localStorage.setItem(SYMPTON_LS, JSON.stringify(symptons));
} 

function paintSymptons(text){
    const li = document.createElement("li");
    const span = document.createElement("span");
    const symptonBtn = document.createElement("button");
    const newId = symptons.length+1;

    symptonBtn.addEventListener("click", handleClick);
    span.innerText = text;
    li.appendChild(symptonBtn);
    li.appendChild(span);
    li.id = newId;
    symptonList.appendChild(li);

    const symptonObj = {
        text: text,
        id: newId
    };

    symptons.push(symptonObj);
    saveSymptons();
}

function loadSymptons(){
    const loadedSymptons = localStorage.getItem(SYMPTON_LS);
    if (loadedSymptons !== null){
        const parsedSymptons = JSON.parse(loadedSymptons);
        parsedSymptons.forEach(function(symptons){
            paintSymptons(symptons.text);
        });
    }
}

function init(){
    loadSymptons();
    [].forEach.call(buttons,
        function(button){
            button.addEventListener("click",handleClick); 
        }); 
}

init();

