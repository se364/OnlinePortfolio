<?php
/**
 *  305/adminpage.php reads students from a database
 *  Shah Emran
 *  Feb 27, 2020
 *
 */

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Connect to db
require('/home/semrangr/db.php');

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
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <title>Guest Book</title>

    <!-- favicon -->
    <link rel="icon" type="image/jpeg" href="images/guestbook.jpg">
</head>

<div class="container">

    <h3>Guest Book Summary</h3>

    <table id="guestbook-table">
        <thead>
        <tr>
            <th>Timestamp</th>
            <th>First Name</th>
            <th>Job Title</th>
            <th>Company</th>
            <th>LinkedIn</th>
            <th>Email</th>
            <th>How We Met</th>
            <th>Other</th>
            <th>Message</th>
        </tr>
        </thead>

        <?php

        //Define a query
        $sql = "SELECT * FROM GuestBook";

        //Send the query to the db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        //Process the result
        foreach ($result as $row) {
            //var_dump($row);

            $timestamp = $row['Date'];
            $first = $row['FirstName'];
            $last = $row['LastName'];
            $jobtitle = $row['JobTitle'];
            $company = $row['Company'];
            $linkedin = $row['LinkedIn'];
            $email = $row['Email'];
            $Howwemet = $row['HowWeMet'];
            $Other = $row['Other'];
            $Message = $row['Message'];


            echo "<tr>
                    <td>$timestamp</td>
                    <td>$first </td>
                    <td>$last</td>
                    <td>$jobtitle</td>
                    <td>$company</td>
                    <td>$linkedin</td>
                    <td>$email</td>
                    <td>$Howwemet</td>
                    <td>$Other</td>
                    <td>$Message</td>
                    
                  </tr>";
        }

        ?>
    </table>

    <a href="guestbook.php">View Guest Book</a>
</div>


<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script>
    $('#guestbook-table').DataTable();
</script>
</body>
</html>