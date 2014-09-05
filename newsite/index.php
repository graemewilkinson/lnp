<!DOCTYPE html>
<?php
$page = "home";
$pagetitle = "Home";
include 'header.php';
?>
<h2 class='introtitle'>London News Pictures: Providing photography for your public relations events</h2>
 <div class='flexslider'>
  <ul class='slides'>
<?php
include 'login.php';

$sql = 'SELECT sliderlink, des FROM slider ORDER BY pos';

// run the query

$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

while ($row = mysql_fetch_row($result)) {
    list ($sliderlink, $des) = $row;
    print "<li>\n";
    print "<img src='img/?$sliderlink' alt='$des' />\n";
    print "</li>";
}
?>
  </ul>
</div>
<p class='tagline'>
        <em>We specialise in photography for corporate events for both small businesses and large blue chip companies. Run by two directors, Stephen Juliet and Robert Geoffries, the team organise the resources needed to meet all of your photography needs. Please contact the directors who will be happy to arrange for our experienced and friendly photographers to cover your event.</em>
      </p>
            <div class='testblock'>
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
include 'footer.php';
?>
    </div>
</body>
</html>
