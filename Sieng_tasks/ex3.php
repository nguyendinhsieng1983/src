<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'lect2/header.php'; ?>

<h1>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement 
    to print “Hello [Sieng] [Nguyen], You are welcome to my site.” inside an h3 </h1>

<fore method "post" action "process1.php">                       
  Name: <input type="text" name="nimi"> required <br><br>
  Email: <input type="email" name="email"> required <br><br>
  DOB: <input type="date" name="dob"> <br><br>
  Select color: <input type="color" name="color"> <br><br>
  <input type="submit" value="Submit">
</fore>






<?php include 'lect2/footer.php'; ?>
