<!DOCTYPE html>
<?php
$page = "testimonials";
include 'header.php';
?>
<p class="tagline">Here we have collated all the testimonials from previous clients we have worked with. These are clients who have given us a testimonial after our work is complete and permission to publish the work we completed for them. We hope this gives you a good overview of the kind of service we offer. You can click read more to see the brief and the rest of the images relating to that client.</p>
<div class='testblock'>    
<?php
include 'login.php';

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql = 'SELECT testimonials.id, testimonials.companyname, testimonials.testimonialcontent, testimonials.name, img.imagelink, img.imagedes, testimonials.ref, img.logo FROM testimonials LEFT JOIN img ON testimonials.id=img.id AND img.logo = TRUE ORDER BY testimonials.id DESC';

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
    print "<p>$name - <a href='clientpage.php?id=$id&amp;from=testi'>read more...</a></p>\n";
    print "</div>\n";
}
?>
            </div>
<?php
include 'footer.php';
?>
    </div>
</body> 
 
