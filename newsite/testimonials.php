<!DOCTYPE html>
<?php
$page = "testimonials";
include 'header.php';
?>
<div class='testblock'>    
<?php
include 'login.php';

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql ='SELECT id, companyname, testimonialcontent, name FROM testimonials ORDER BY id DESC';

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());
while ($row = mysql_fetch_row($result)) {
    print '<div class="testimonial">';
    list ($id, $companyname, $testimonialcontent, $name) = $row;
    print "<h3>$companyname</h3>\n";
    print "<blockquote>$testimonialcontent</blockquote>\n";
    print "<p>$name - <a href='clientpage.php?id=$id'>read more...</a></p>\n";
    print "</div>\n";
}
?>
            </div>
<?php
include 'footer.html'
?>
    </div>
    </body>
</html>    
 