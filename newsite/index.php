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

$sql ='SELECT id, companyname, testimonialcontent, name FROM testimonials ORDER BY id DESC LIMIT 3';

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

while ($row = mysql_fetch_row($result)) {
    print '<div class="testimonial">';
    list ($id, $companyname, $testimonialcontent, $name) = $row;
    print "<h3>$companyname</h3>\n";
    print "<blockquote>$testimonialcontent</blockquote>\n";
    print "<p>$name</p>\n";
    print "</div>\n";
}
?>
            </div>
    </div>
</body> 
    