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
<h2>Feedback Form</h2>
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  From: <input type="text" name="from"><br>
  Subject: <input type="text" name="subject"><br>
  Message: <textarea rows="10" cols="40" name="message"></textarea><br>
  <input type="submit" name="submit" value="Submit Feedback">
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
      echo "Thank you for sending us feedback";
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
</div>
</body>
</html>