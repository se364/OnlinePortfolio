


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href="form.css">
    <title>Thank you for order</title>
</head>
<body>
<h1> Thank you very much for your interest</h1>
</body>
<pre>
    <?php
    // Validate data - server side (PHP)
    require('serverconfirm.php');
    require('/home/semrangr/db.php');

    //var_dump($_GET);


    //$timestamp = $_POST['Date'];
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $jobtitle = $_POST['job'];
    $company = $_POST['company'];
    $linkedin = $_POST['linkedin'];
    $email = $_POST['email'];
    $Howwemet = $_POST['met'];
    $Other = $_POST['other'];
    $Message = $_POST['text'];

    $isValid = true;

    // test required fields and show error messages if needed
    if (!validFirstName($_POST['fname'])) {
        echo "<p>Error: First name is required.</p>";
        $isValid = false;
    }

    if (!validLastName($_POST['lname'])) {
        echo "<p>Error: Last name is required.</p>";
        $isValid = false;
    }


    if ($_POST['email'] != "") {
        if (!validEmail($_POST['email'])) {
            echo "<p>Error: Please enter a valid email address.</p>";
            $isValid = false;
        }
    }

    if (!validlinkedin($_POST['linkedin'])) {
        echo "<p>Error: Please enter a valid linkedIn link.</p>";
        $isValid = false;
    }

    if (!validMet($_POST['met'])) {
        echo "<p>Error: Please enter how you met.</p>";
        $isValid = false;
    }

    // if the checkbox is checked
    if(isset($_POST['checkemail'])) {


        if (!validEmail($_POST['email'])) {
            echo "<p>Error: Please enter a valid email address.</p>";
            $isValid = false;
        }
    }

    //$timestamp = mysqli_real_escape_string($cnxn, $_POST['Date']);
    $first = mysqli_real_escape_string($cnxn, $_POST['fname']);
    $last = mysqli_real_escape_string($cnxn, $_POST['lname']);
    $jobtitle = mysqli_real_escape_string($cnxn, $_POST['job']);
    $company = mysqli_real_escape_string($cnxn, $_POST['company']);
    $linkedin = mysqli_real_escape_string($cnxn, $_POST['linkedin']);
    $email = mysqli_real_escape_string($cnxn, $_POST['email']);
    $Howwemet = mysqli_real_escape_string($cnxn, $_POST['met']);
    $Other = mysqli_real_escape_string($cnxn, $_POST['other']);
    $Message = mysqli_real_escape_string($cnxn, $_POST['message']);





    if ($isValid) {

        // put confirmation message in HTML

            $sql = "INSERT INTO GuestBook(Date,FirstName, LastName,JobTitle,Company,LinkedIn,
                      Email,HowWeMet,Other,Message)
                      VALUES(NOW(),'$first','$last','$jobtitle','$company','$linkedin','$email',
                             '$Howwemet ','$Other','$Message')";

            $result = mysqli_query($cnxn, $sql);

        }

    ?>


</pre>





</html>