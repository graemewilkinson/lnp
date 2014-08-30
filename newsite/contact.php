<!DOCTYPE html>
<?php
$page = "contactus";
include 'header.php';
function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}
?>
<div class="contactpage">

<?php 
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <h2>Contact Us Form</h2>
    <p>Please complete the below form to get a fast response from us.</p>
  <!--thanks to chriscoyer for his example that helped me make this form adaptive http://codepen.io/chriscoyier/pen/DmnlJ-->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <div>
    <label class="desc" id="title1" for="Field1">Subject</label>
    <div>
      <input id="Field1" name="subject" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
  </div>
    
  <div>
    <label class="desc" id="title3" for="Field3">
      Email
    </label>
    <div>
      <input id="Field3" name="from" type="email" spellcheck="false" value="" maxlength="255" tabindex="3"> 
   </div>
  </div>
    
  <div>
    <label class="desc" id="title4" for="Field4">
      Message
    </label>
  
    <div>
      <textarea id="Field4" name="message" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
    </div>
  </div>
  <div>
      <input id="saveForm" type="submit" value="Submit" name="submit">
    </div>
  </form>
  <?php 
} else {  // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["from"]);
    if ($mailcheck==FALSE) {
      echo "Invalid input";
    } else {
      $from = $_POST["from"]; // sender
      $subject = $_POST["subject"];
      $message = $_POST["message"];
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("graeme.wilkinson@me.com",$subject,$message,"From: $from\n");
      echo "Thank you for sending us a message";
    }
  }
}
?>
</div>
<div class="contactpage">
<h2>Prefer to email us directly?</h2>
<p>If that's the case, we have a link to our <a class="email" href="mailto:graeme dot wilkinson at me dot com">email</a> here to stop the spambots making use of it!</p>
</div>
<script>
  $('.email').attr('href', 'mailto:' + 'graeme' + '.' + 'wilkinson' + '@' + 'me' + '.' + 'com');
</script>
<?php
include 'footer.html';
?>
</div>
</body>
</html>