<?php

function validFirstName($firstName){
    return !empty($firstName);
}

function validLastName($lastName){
    return !empty($lastName);
}


function validMet($met){
    return !empty($met);
}

function validlinkedin($linkedin)
{
    $linkedin = "http://www.linkedin.com/in/";
    return filter_var($linkedin, FILTER_SANITIZE_URL);

}


function validEmail($email){

    return filter_var($email, FILTER_VALIDATE_EMAIL);
}



