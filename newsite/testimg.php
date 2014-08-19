<?php
// Connect to the database
// Normal kept in a separate file and used with include()
$hostname = "mysql.gwilki01.wdd1314.bbkweb.org";
$username = "gwilki01";
$password = "Edahze45imei";
$database = "gwilki01";

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql ='SELECT id, companyname, mainimg, mainimgdes FROM testimonials ORDER BY id DESC';

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

print "<div class='clearfix mosaicflow'>\n\n";
while ($row = mysql_fetch_row($result)) {
    list($id, $companyname, $mainimg, $imgdes) = $row;
    print "<div class='mosaicflow__item'>\n";
    print "<a href=\'testpage.php?id=$id'\">\n<img src='img/$mainimg' width='500' height='300' alt='$mainimgdes'>\n<p>$companyname</p></a>\n";
    print "</div>\n";
}
print "</div>\n";
?>