<!DOCTYPE html>
<?php
$page = "clientpage";
include 'header.php';
if ($_GET["from"] == 'testi'){
print "<p class='breadcrumb'><a href='testimonials.php'>Testimonials</a>/Client Page</p>";
}
else {
 print "<p class='breadcrumb'><a href='ourwork.php'>Our Work</a>/Client Page</p>";
}
include 'login.php';

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql ='SELECT id, companyname, testimonialcontent, name, brief FROM testimonials WHERE id = '. $_GET['id'];
$images ='SELECT imagelink, imagedes FROM img WHERE logo = FALSE AND id = '. $_GET['id'];

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());
$imageresult = mysql_query($images,$link) or die("Unable to select: ".mysql_error());

 $row = mysql_fetch_row($result);
    list ($id, $companyname, $testimonialcontent, $name, $brief) = $row;
    print "<h2 class='client'>$companyname</h2>\n";
    print "<div class='clearfix mosaicflow'>\n";
while ($imagerow = mysql_fetch_row($imageresult)) {
    list ($imagelink, $imagedes) = $imagerow;
    print "<div class='mosaicflow__item'>\n";
    print "<img src='img/?$imagelink' alt='$imagedes'>\n";
    print "</div>\n";
}
    print "</div>";
    print "<div class='clientpagebtm'>";
    print "<h3>Client Brief & Our Approach</h3>\n";
    print "<blockquote>$brief</blockquote>\n";
    print "</div>\n";
    print "<div class='clientpagebtm'>";
    print "<h3>$companyname Testimonial</h3>\n";
    print "<blockquote>$testimonialcontent</blockquote>\n";
    print "<p>$name</p>\n";
    print "</div>\n";
    include 'footer.php';
?>
</div>
</body>
</html>
