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
    <form action="http://formmail.dreamhost.com/cgi-bin/formmail.cgi" method="POST">
    
    <div>
    <label class="desc" id="title1" for="Field1">Your Full Name</label>
    <div>
      <input id="Field1" name="realname" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
  </div>
   
   <div>
    <label class="desc" id="title2" for="Field2">
      Your Email Address
    </label>
    <div>
      <input id="Field2" name="from" type="email" spellcheck="false" value="" maxlength="255" tabindex="2"> 
   </div>
  </div>
   
  <div>
    <label class="desc" id="title3" for="Field3">Subject</label>
    <div>
      <input id="Field3" name="subject" type="text" class="field text fn" value="" size="8" tabindex="3">
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
  
</div>
<div class="contactpage">
<h2>Prefer to email us directly?</h2>
<p>If that's the case, we have a link to our <a class="email" href="mailto:graemedotwilkinsonatmedotcom">email</a> here to stop the spambots making use of it!</p>
</div>
<script>
  $('.email').attr('href', 'mailto:' + 'graeme' + '.' + 'wilkinson' + '@' + 'me' + '.' + 'com');
</script>
<div class="contactpage">
<h2>Our telephone number</h2>
<p>We have to admit that we're not very often able to pick up the phone and especially prefer first contact by email, we're directors, but we work in news photography every day and have busy lives so don't always find time to answer the phone. If you need to phone us then please do, but you may have better luck with email.</p>
<a class=phone href=tel:zerosevensevenninetwofourzerotwosevensixfive><img class="phoneimg" src="img/phoneno.svg" alt="call us on zero double seven nine two four zero two seven six five" /></a>
</div>

<?php
include 'footer.php';
?>
</div>
</body>
</html>