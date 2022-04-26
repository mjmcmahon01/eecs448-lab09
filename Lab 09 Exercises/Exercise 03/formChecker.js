function func() {
    errorTracker = 0;
    var numBirds = null;
    var numDogs = null;
    var numCats = null;
    var userName = null;
    var password = null;

    numBirds = document.getElementById("numBirds").value;
    numDogs = document.getElementById("numDogs").value;
    numCats = document.getElementById("numCats").value;
    username = document.getElementById("Username").value;
    password = document.getElementById("Password").value;

    var ele = document.getElementsByName("shipping");
    var option = null;
    for(i = 0; i < ele.length; i++) {
        if(ele[i].checked) {
            option = ele[i];
        }
    }

    if(numBirds < 0 || numBirds.length == 0 || numDogs < 0 || numDogs.length == 0 || numCats < 0 || numCats.length == 0) {
        window.alert("Error: one or more of the inputs in the pet selection form is invalid.\nPlease be sure to input values of 0 or above.");
        errorTracker++;
    }
    if(username.length == 0) {
        window.alert("Error: username form is blank. Please input valid username.")
        errorTracker++;
    }
    if(password.length == 0) {
        window.alert("Error: password form is blank. Please input valid password.")
        errorTracker++;
    }
    if(username.includes("@") && username.includes(".com")) {
        
    }
    else {
        window.alert("Error: username is invalid. Please input username of form name@domain.com.");
        errorTracker++
    }
    if(option == null) {
        window.alert("Error: shipping option form is blank. Please select a shipping option.");
        errorTracker++
    }
    
    if(errorTracker == 0) {
        //call backend logic
    }
}