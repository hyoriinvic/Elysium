// #2.0 - 2.1
// Function
// function func_name(arguments){}

function sayHello(name, age){
    console.log("Hello!", name, " You are", age, " years old.");
}

sayHello("Hyorin Kim", 23);

// 백틱 `` 
function sayHello_new(name, age){
    return `Hello ${name}. You're ${age} years old.`
}

const greetNicolas = sayHello_new("Nicolas", 25)
console.log(greetNicolas)

//Calculator
const calculator = {
    plus: function(a, b){return a + b;},
    minus: function(a, b){return a - b;},
    multiple: function(a, b){return a * b;},
    divide: function(a, b){return a / b;}
}

const plus = calculator.plus(5,5)
console.log(plus)