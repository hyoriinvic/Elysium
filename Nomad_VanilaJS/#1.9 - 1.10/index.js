// Arrays: lists of data 
const daysOfWeek = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"]; 

console.log(daysOfWeek);
console.log(daysOfWeek[3]); // index: 0 to 6

// Objects (like Python_Dictionary)
const peopleInfo = {
	name : "Hyorin Kim",
	age : 23,
	gender : "Female",
	favMovies: ["Along the gods", "LOTR", "Oldboy"],
	favFood: [
		{
			name: "Kimchi", 
			fatty: false
		}, 
		{
			name: "Cheese burger", 
			fatty: true
		}
	]
}

console.log(peopleInfo)
console.log(peopleInfo.name)
console.log(peopleInfo.gender)