<!DOCTYPE html>
<?php
$page = "home";
include 'header.php';
?>

<p class="tagline">
        <em>A collaborative photographic agency run by professional editorial photographers throughout the UK. Supplying quality news and feature pictures.</em>
      </p>
 <div class="flexslider">
  <ul class="slides">
    <li>
      <img src="img/kitchen_adventurer_cheesecake_brownie.jpg" />
    </li>
    <li>
      <img src="img/kitchen_adventurer_donut.jpg" />
    </li>
  </ul>
</div>
            <div class="testblock">
<?php
include 'login.php';

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql = 'SELECT testimonials.id, testimonials.companyname, testimonials.testimonialcontent, testimonials.name, img.imagelink, img.imagedes, img.ref, img.logo FROM testimonials LEFT JOIN img ON testimonials.id=img.id AND img.logo = TRUE ORDER BY testimonials.id LIMIT 3';

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

while ($row = mysql_fetch_row($result)) {
    print "<div class='testimonial'>\n";
    list ($id, $companyname, $testimonialcontent, $name, $imagelink, $imagedes, $ref, $logo) = $row;
    if ($logo == TRUE) {
    print "<div class='$ref'><img src='img/$imagelink' alt='$imagedes' /></div>\n";
}
    print "<h3 class='test'>$companyname</h3>\n";
    print "<blockquote>$testimonialcontent</blockquote>\n";
    print "<p class='test'>$name</p>\n";
    print "</div>\n";
}
?>
            </div>
    </div>
</body> 
    