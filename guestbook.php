<?php
/**
 *  File name & path
 *  Author
 *  Date
 *  Description
 */

$title = "Guestbook Page";
require('includes/check-login.php');


?>



<!doctype html>
<!-- http://semran.greenriverdev.com/305/guestbook/

Author : Shah Emran
Date : 1/30/2020

The assigment involves creating a guest book with jumbtron

-->
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="guestbook.css">

    <title>Guest Book</title>

    <!-- favicon -->
    <link rel="icon" type="image/jpeg" href="images/guestbook.jpg">
</head>
<body>

<div class="container" id="main">

    <div class="jumbotron jumbotron-fluid" id="title">
        <div class="container">
            <h1 class="display-3">Welcome</h1>
            <p class="lead">Please enter information to be included in the guest list </p>
        </div>
    </div>

    <img src="images/guestbook.jpg" class="float-right" alt="Guest">
    <form id="guestbook" method="POST" action="confirm.php">

        <!-- Contact Info -->
        <fieldset class="form-group">

            <legend>Contact Info</legend>

            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname">
                <span class="err" id = "errfname">Field is required </span>
            </div>

            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname">
                <span class="err" id = "errlname">Field is required </span>
            </div>

            <div class="form-group">
                <label for="job">Job Title</label>
                <input type="text" class="form-control" id=job placeholder="Enter job title" name="job">
                <span class="err" id = "errjob">Field is required </span>
            </div>

            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control" id="company" placeholder="Company Name" name="company">
                <span class="err" id = "errcompany">Field is required </span>
            </div>

            <div class="form-group">
                <label for="linkedin">LinkedIn URL</label>
                <input type="text" class="form-control" id="linkedin" placeholder="www.linkedin.com/in/name" name="linkedin">
                <span class="err" id = "errlinkedin">Field is required </span>
            </div>

            <div class="form-group">
                <label for="email">Email address:</label><br>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="you@example.com"><br>
                <span class="err" id = "erremail">Field is required </span>
            </div>



        </fieldset>


        <!--HOW WE MET-->
        <fieldset class="form-group">

            <legend>How We Met</legend>

                <label for="met">How We Met</label>
                <select class="form-control" id="met" name="met">
                    <option value="none">How we met</option>
                    <option value="small">Meet up</option>
                    <option value="medium">Job Fair</option>
                    <option value="large">We haven't met yet</option>
                    <option value="other">Other</option>

                </select>
            <span class="err" id="errmet">Please select an option</span>
            <div class="form-group">
                <label for="other">Other: </label><br>
                <input type="text" class="form-control" id="other" name="other" aria-describedby="emailHelp" placeholder="Please Specify"><br>
            </div>



            <div class="form-group">
                <label for="text">Message</label>
                <textarea rows="5" cols="20" class="form-control" id="text"  placeholder="Message" name="text"></textarea>
            </div>

        </fieldset>



            <!--Add to email-->
        <fieldset class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox"  id="checkemail" >
                <label class="form-check-label" for="checkemail">Please add me to your email list</label>
            </div>

            <br>

            <!--Email format-->
            <legend>Subscription</legend>

            <p>Please choose an email format: </p>
            <div class="form-check" >

                <label class="form-check-label" for="html"><input class="radio-inline" type="radio" name="method" id="html" value="html" checked>
                    HTML
                </label>


                <label class="form-check-label" for="radioText"><input class="radio-inline" type="radio" name="method" id="radioText" value="radioText">
                    Text
                </label>
            </div>


        </fieldset>

        <!-- Submit -->
        <button id="submit" type="submit" class="btn btn-primary">Submit</button>

        <div class="col-md-7 ml-auto mt-auto">
            <a href="logout.php" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-log-out"></span> Log out
            </a>
        </div>
    </form>

    <div class="col-md-1 ml-auto mt-auto">
        <a class="link small" href="AdminPage.php">
            <i class="fas fa-lock"></i> Admin
        </a>
    </div>

</div>

<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="guestbook.js"></script>-->
</body>
</html>

