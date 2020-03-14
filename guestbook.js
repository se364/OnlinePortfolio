"use strict";

document.getElementById("guestbook").onsubmit = formValidate; //big form submit button

// form validation
function formValidate(){

    // create a flag variable
    let valid = true;

    // Clear all errors
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    //Check for errors
   // let errAll = document.getElementById("errAll");

    //Check first name
    let first = document.getElementById("fname").value;
    if (first === "") {
        let errFirst = document.getElementById("errfname");
        errFirst.style.visibility = "visible";
        //errAll.style.visibility = "visible";
        valid = false;
    }

    // Check last name
    let last = document.getElementById("lname").value;
    if (last === "") {
        let errLast = document.getElementById("errlname");
        errLast.style.visibility = "visible";
        //errAll.style.visibility = "visible";
        valid = false;
    }

    // check job title
    let job = document.getElementById("job").value;
    if (job === "") {
        let errJob = document.getElementById("errjob");
        errJob.style.visibility = "visible";
       // errAll.style.visibility = "visible";
        valid = false;
    }

    // check company

    let company  = document.getElementById("company").value;
    if (company === "") {
        let errCompany = document.getElementById("errcompany");
        errCompany.style.visibility = "visible";
       // errAll.style.visibility = "visible";
        valid = false;
    }

    // check linkedin

    let linkedin = document.getElementById("linkedin").value;
    if(linkedin !== ""){
        if(!linkedin.startsWith("www") || !linkedin.endsWith(".com")){
            let errLinkedIn = document.getElementById("errlinkedin");
            errLinkedIn.style.visibility = "visible";
            valid = false;
        }
    }


    // Check email address
    let emailAdd = document.getElementById("email").value;
    let checkemail = document.getElementById("checkemail");
    if(emailAdd !== "" ||checkemail.checked){ //if email was supplied OR mailing list box was checked, check that email is valid
        validateEmail();
    }

    let met = document.getElementById("met").value;
    if(met === ""){
        let errMet = document.getElementById("errmet");
        errMet.style.visibility = "visible";
        //errAll.style.visibility = "visible";
        valid = false;
    }



    return valid;
}


// function for checking the email is valid

function validateEmail(){
    let valid = true;
    let emailAdd = document.getElementById("email").value;
    if (emailAdd === "") {
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";

        valid = false;
    }
    else {
        let countAt = 0;
        let countDot = 0;
        for (let i = 0; i < emailAdd.length; i++) {
            let validation = emailAdd.charAt(i);
            if(validation === '@'){
                countAt++;
            }
            if(validation === '.') {
                countDot++;
            }
        }
        if(countAt === 0 || countDot === 0){
            let errEmail = document.getElementById("errEmail");
            errEmail.style.visibility = "visible";

            valid=false;
        }
    }
}

// If the user clicks the mailing list box, email box is required
// function Mailing list creates requirement for the user to add email add

function validateMailingList(){
    let checkemail = document.getElementById("checkemail");
    let Formathtml = document.getElementById("html");
    let Formattext = document.getElementById("radioText");


    if(checkemail.checked){
        //email required
        validateEmail();

        //check box visible
        Formathtml.style.visibility = "visible";
        Formattext.style.visibility = "visible";


    }
    else{
        //make email address NOT a required field
        let errEmail = document.getElementById("erremail");
        errEmail.style.visibility = "hidden";

        //make mailing list buttons hidden
        Formattext.style.visibility = "hidden";
        Formathtml.style.visibility = "hidden";


    }
}