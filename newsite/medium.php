<?php header("Content-type: text/css; charset=utf-8");

include 'login.php';

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql = 'SELECT testimonials.ref, img.logo FROM testimonials LEFT JOIN img ON testimonials.id=img.id AND img.logo = TRUE ORDER BY testimonials.id';

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

while ($row = mysql_fetch_row($result)) {
    list ($ref, $logo) = $row;
    if ($logo == FALSE) {
    print ".$ref\n{\n";
    print "display: none;\n";
    print "}\n";
}
}
?>
#menu li {
  display: block;
  float: left;
  width: 50%; /* 100/number of items */
}
div.testimonial
{
	float:left;
	margin: 0% 1% 0% 1%;
	width: 100%;
}
.mosaicflow__item p
{
  opacity: 1;
}
div.contactpage
{
    width: 94%;
    float: left;
    margin: 3%
}
header img
{
float: none;
width: 160px;
display: block;
margin: 2% auto 0 auto;
}
header h1
{
width: 100%;
margin: 2% 0; 
}