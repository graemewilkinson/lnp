<!DOCTYPE html>
<?php
$page = "home";
include 'header.php';
?>

<p class="tagline">
        <em>London News Pictures, (Public Relations Photgraphy) specialises in covering corporate events and generally catering for the needs to large and small companies alike. Run by Stephen Juliet and Robert Geoffries the team organise the resources needed to meet your requirement at the correct budget level. When you contact us you will be liaising directly with the directors. Stephen and Geoff work together, they are friendly, approachable and reliable, they also often seek the help of reliable, honest and friendly photographers from main company, London News Pictures News Photography.</em>
      </p>
 <div class="flexslider">
  <ul class="slides">
    <li>
      <img src="img/?boatslider.jpg" alt="two men rowing on boat as part of corporate event" />
    </li>
    <li>
      <img src="img/?saxoslider.jpg" alt="Saxophonist at a even run by a company for their staff" />
    </li>
    <li>
      <img src="img/?dinnerslider.jpg" alt="Large event by the SKY Corporation, many staff seated in hall having meals" />
    </li>
  </ul>
</div>
            <div class="testblock">
<?php
include 'login.php';

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql = 'SELECT testimonials.id, testimonials.companyname, testimonials.testimonialcontent, testimonials.name, img.imagelink, img.imagedes, testimonials.ref, img.logo FROM testimonials LEFT JOIN img ON testimonials.id=img.id AND img.logo = TRUE ORDER BY testimonials.id DESC LIMIT 3';

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

while ($row = mysql_fetch_row($result)) {
    print "<div class='testimonial'>\n";
    list ($id, $companyname, $testimonialcontent, $name, $imagelink, $imagedes, $ref, $logo) = $row;
    if ($logo == TRUE) {
    print "<div class='$ref'><img src='img/$imagelink' alt='$imagedes' /></div>\n";
}
    else {
    print "<div class='$ref'></div>\n";
}
    print "<h3>$companyname</h3>\n";
    print "<blockquote>$testimonialcontent</blockquote>\n";
    print "<p>$name</p>\n";
    print "</div>\n";
}
?>
            </div>
<?php
include 'footer.html';
?>
    </div>
</body> 
    