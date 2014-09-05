<!DOCTYPE html>
<?php
$page = "testimonials";
$pagetitle = "Testimonials";
include 'header.php';
?>
<p class='tagline'>Here we have collated all the testimonials from previous clients we have worked with. These are clients who have given us a testimonial after our work is complete and permission to publish the work we completed for them. We hope this gives you a good overview of the kind of service we offer. You can on the arrow icon to see the brief and the rest of the images relating to that client.</p>

<div class='testblock'>    
<?php
$sql = 'SELECT testimonials.id, testimonials.companyname, testimonials.testimonialcontent, testimonials.name, img.imagelink, img.imagedes, testimonials.ref, img.logo FROM testimonials LEFT JOIN img ON testimonials.id=img.id AND img.logo = TRUE ORDER BY testimonials.id DESC';

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

while ($row = mysql_fetch_row($result)) {
    print "<div class='testimonialmain'>\n";
    list ($id, $companyname, $testimonialcontent, $name, $imagelink, $imagedes, $ref, $logo) = $row;
    if ($logo == TRUE) {
    print "\n<div class='$ref'>\n<img src='img/$imagelink' alt='$imagedes' />\n</div>\n\n";
}
    else {
    print "<div class='$ref'></div>\n";
}
    print "<h2>$companyname</h2>\n";
    print "<blockquote>$testimonialcontent</blockquote>\n";
    print "<p>$name<a href='clientpage.php?id=$id&amp;from=testi'><img class='more' src='img/arrow.svg' alt='read more about our work for $companyname'></a></p>\n";
    print "</div>\n\n";
}
?>
            </div>
<?php
include 'footer.php';
?>
    </div>
</body> 
 
