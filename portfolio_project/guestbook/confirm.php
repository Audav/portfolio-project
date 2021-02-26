<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('includes/head.html');


//Make sure the user is coming from the form
if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {

    //Send user to form page
    header("location: guestbook.php");
}

require('includes/php-setup.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$job = $_POST['job'];
$company = $_POST['company'];
$linkedin = $_POST['linkedin'];
$email = $_POST['email'];
$choosehow = $_POST['choosehow'];
$other = $_POST['ifother'];
$message = $_POST['message'];
$dateadded = $_POST['dateadded'];

//VALIDATE DATA BEFORE INSERTING INTO DATABASE


$sql = "INSERT INTO guestbook (`fname`, `lname`, `job`, `company`, `linkedin`, `email`, `choosehow`, `other`, `message`) 
VALUES ('$fname', '$lname', '$job', '$company', '$linkedin' , '$email',
                                        '$choosehow', '$other' , '$message' );"; //Works?

$success = mysqli_query($cnxn, $sql);

if ($success) {
    echo "<h3>New guest added!</h3>";
} else {
    echo "Something went wrong";
}
?>

<body>
    <div class="container" id="confirm">
        <h2>Thank you for your submission!</h2>
    </div>
</body>