<!DOCTYPE html>
<?php
$page = "clientpage";
include 'header.php';
include 'login.php';

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql ='SELECT id, companyname, testimonialcontent, name FROM testimonials WHERE id = '. $_GET['id'];
$images ='SELECT id, imageid, imagelink, imagedes FROM img WHERE id = '. $_GET['id'];

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());
$imageresult = mysql_query($images,$link) or die("Unable to select: ".mysql_error());

 $row = mysql_fetch_row($result);
    list ($id, $companyname, $testimonialcontent, $name) = $row;
    print "<h1>$companyname</h1>\n";
    print "<div class='clearfix mosaicflow'>\n";
while ($imagerow = mysql_fetch_row($imageresult)) {
    list ($id, $imageid, $imagelink, $imagedes) = $imagerow;
    print "<div class='mosaicflow__item'>\n";
    print "<img src='img/$imagelink' alt='$imagedes'>\n";
    print "</div>\n";
}
    print "<div style='clear: both;'></div>";
    print "</div>";
    print "<div>";
    print "<p>$testimonialcontent</p>\n";
    print "<p>$name</p>";
    print "</div>";
?>
<div style="clear: both;"></div>
</div>


</body>
</html>