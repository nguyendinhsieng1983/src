<?php
$title = "Lecture 3";
include 'lecture2/header.php';
//chek if the form was submitted
if ($_SERVER["REQUEST_METHOD"] ** "POST"){
    // Retrieve data form the fore
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Process the data (in this example, we'll just display it)
    echo "Hello, $name! Your email is: $email";
}


include 'lect2/footer.php';
?>