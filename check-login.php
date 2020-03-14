<?php
/**
 *  File name & path
 *  Author
 *  Date
 *  Description
 */

//echo"<pre>";
//var_dump($_SERVER);
//echo"</pre>";

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

// See if the user logged in
session_start();

// If not logged in
if(!isset($_SESSION['un'])){

    // Store current location
    $_SESSION['page'] = $_SERVER["SCRIPT_URI"];

    //Redirect to login page
    header("location: login2.php");
}

?>