<?php
    header("Content-type: text/css; charset: UTF-8");

include 'login.php';

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql = 'SELECT testimonials.ref, img.logo FROM testimonials LEFT JOIN img ON testimonials.id=img.id AND img.logo = TRUE ORDER BY testimonials.id';

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

while ($row = mysql_fetch_row($result)) {
    list ($ref, $logo) = $row;
    if ($logo == TRUE) {
}
    else {
    print ".$ref\n{\n";
    print "display: none;\n";
    print "}\n";
}
}
?>