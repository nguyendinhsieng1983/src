<?php
$title = "Exercise 4: Control flow and loops";
include 'lect2/header.php'; ?>

<h1> Write a PHP script to get inputs (age and name) from the user and based on their age,   
     decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h1>
  
   <from name"form1" method= "post"

<from method= "post" action = <?php                       
  Name: <input type="text" name="nimi"> required <br><br>
  Email: <input type="email" name="email"> required <br><br>
  DOB: <input type="date" name="dob"> <br><br>
  Select color: <input type="color" name="color"> <br><br>
  <input type="submit" value="Submit">
</from>



<?php
$str1 ="Hello"; &&  $str2 = "World";
echo "Hello World"; 
?>


<?php
//processing form in the same page

// check for a post request
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST["nimi"];
  $email = $_POST["email"];
}

<?php include 'lect2/footer.php'; ?>
