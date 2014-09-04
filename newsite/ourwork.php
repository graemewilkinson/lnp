<!DOCTYPE html>
<?php
$page = "ourwork";
include 'header.php';
?>
<p class='tagline'>Below is a selection of images which link to galleries of our work for past clients. You can read the testimonials, the brief and see a selection of photography we have completed for that client by clicking on the relevant image.</p>
<?php
include 'login.php';

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql ='SELECT img.id, testimonials.id, img.imageid, img.imagelink, img.imagedes, img.main,  testimonials.companyname, testimonials.testimonialcontent, testimonials.name FROM img INNER JOIN testimonials ON img.id=testimonials.id WHERE img.main = TRUE ORDER BY testimonials.id DESC';

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

print "<div class='clearfix mosaicflow'>\n\n";
while ($row = mysql_fetch_row($result)) {
    list($id, $id, $imageid, $imagelink, $imagedes, $main, $companyname, $testimonialcontent, $name) = $row;
    print "<div class='mosaicflow__item'>\n";
    print "<a href='clientpage.php?id=$id'>\n<img class='mosiac' src='img/?$imagelink' alt='$imagedes'>\n<p>$companyname</p></a>\n";
    print "</div>\n";
}
print "</div>\n";
include 'footer.php';
?>
</div>

</body>
</html>
