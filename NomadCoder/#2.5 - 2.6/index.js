/*
if(condition){
} else if(){
} else{
}

condition checking(같은지 비교) '===' 사용
combining different conditions 
    > && (and), || (or)
*/

const age = prompt("How old are you?"); // prompt: user 에게 답변 받음

console.log(age);

if(age >= 18 && age <= 21){
    console.log("you can drink but you should not");
} else if(age > 21){
    console.log("go ahead");
} else{
    console.log("too young");
}
