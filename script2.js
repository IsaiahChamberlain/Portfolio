var myReferences = [
    ["Kevin Berrio", " This person is a great worker, you should definitely hire him!"],
 ["Joe Fox", " Very obedient and a great listener always does what he is told."]];

for (let i = 0; i < myReferences.length; i++) {
    document.getElementById("references").innerHTML = "The Length of the array is: " + myReferences.length;

}

let myVar = "References: <ol>";

for (let j = 0; j < myReferences.length; j++) {
    myVar += "<li>" + myReferences[j] + "</li>"
}

myVar += "</ol>";

document.getElementById("results").innerHTML = myVar;