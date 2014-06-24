<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($companyname, $testimonialcontent, $individualname, $error)
 {
 ?>
<!DOCTYPE html>
 <html>
 <head>
 <title>Edit Record</title>
 </head>
 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <input type="hidden" name="testimonialID" value="<?php echo $testimonialID; ?>"/>
 <div>
 <strong>Companyname: *</strong> <input type="text" name="Companyname" value="<?php echo $companyname; ?>"/><br/>
 <strong>Testimonial Content: *</strong> <input type="text" name="testimonialcontent" value="<?php echo $testimonialcontent; ?>"/><br/>
  <strong>Individuals Name: *</strong> <input type="text" name="individualname" value="<?php echo $individualname; ?>"/><br/>
 <p>* Required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html> 
 <?php
 }



 // connect to the database
 include('connect-db.php');
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 {
     // confirm that the 'id' value is a valid integer before getting the form data
 if (is_numeric($_POST['testimonialID']))
 {
 // get form data, making sure it is valid
 $companyname = mysql_real_escape_string(htmlspecialchars($_POST['companyname']));
 $testimonialcontent = mysql_real_escape_string(htmlspecialchars($_POST['testimonialcontent']));
 $individualname = mysql_real_escape_string(htmlspecialchars($_POST['individualname']));
 // check that firstname/lastname fields are both filled in
 if ($companyname == '' || $testimonialcontent == '' || $individualname == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
 renderForm($companyname, $testimonialcontent, $individualname, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("UPDATE testimonial SET companyname='$companyname', testimonialcontent='$testimonialcontent' individualname='$individualname'")
 or die(mysql_error()); 
 
// once saved, redirect back to the view page
 header("Location: view.php"); 
 }
 }
 else
 {
 // if the 'id' isn't valid, display an error
 echo 'Error!';
 }
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
    
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['testimonialID']) && is_numeric($_GET['testimonialID']) && $_GET['testimonialID'] > 0)
 {
 // query db
 $testimonialID = $_GET['testimonialID'];
 $result = mysql_query("SELECT * FROM testimonials WHERE testimonialID=$testimonialID")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $companyname = $row['companyname'];
 $testimonialcontent = $row['testimonialcontent'];
 $individualname = $row['individualname'];
 
 // show form
 renderForm($companyname, $testimonialcontent, $individualname, $error);
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 {
 echo 'Error!';
 }
 }
?>