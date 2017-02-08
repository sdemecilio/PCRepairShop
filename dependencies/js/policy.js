/**
 * Created by shimbeyassie on 1/19/17.
 */
function policyValidate() {
    var initial = document.getElementById("initial").value;

    if(initial.length > 2){
        alert("Invalid please enter 2 letters or less");
        return false;
    }else {
        return true;
    }


}

function checkInitial(){
    var initial = document.getElementById("initial").value;
    //var amount =document.getElementById("amount").value;

    if(initial.length > 2){
       element.innerHTML="Invalid initials";
       element.style.color="red"
    }else {
        element.innerHTML="Valid Initials";
        element.style.color ="green";
    }


}



