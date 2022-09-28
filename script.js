const MyDate = new Date();
var hours = MyDate.getTime();

function askName(){
    
    var firstName = prompt("What is your name?");
    if(hours >= 5 && hours <= 12){
        alert("Goodmorning," + firstName + "welcome to my site!")
    } else if (hours > 12 && hours <= 18) {
        alert("Good Afternoon," + firstName + "welcome to my site!")
    } else if (hours > 18) {
        alert(`Good evening ${firstName} Welcome to my site`)
    }
}
