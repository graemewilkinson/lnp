<?php header("Content-type: text/css; charset=utf-8");
    $page = $_GET['page'];
    error_reporting(E_ALL); ini_set('display_errors', 1);
    
include 'login.php';

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql = 'SELECT img.imagelink, img.imagedes, testimonials.ref, img.logo FROM testimonials LEFT JOIN img ON testimonials.id=img.id AND img.logo = TRUE ORDER BY testimonials.id';

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

while ($row = mysql_fetch_row($result)) {
    list ($imagelink, $imagedes, $ref, $logo) = $row;
    if ($logo == TRUE) {
    print ".$ref\n{\n";
    print "width: 50px;\n";
    print "height: 50px;\n";
    print "border-radius: 25px;\n";
    print "-webkit-border-radius: 25px;\n";
    print "-moz-border-radius: 25px;\n";
    print "background: url('img/$imagelink') no-repeat;\n";
    print "background-size: 50px 50px;\n";
    print "margin: auto;\n";
    if ($page == 'testimonials'){
    print "margin-top: 5%;\n";
    }
    print "}\n";
    
    print ".$ref img {\n";
    print "opacity: 0;\n";
    print "filter: alpha(opacity=0);\n";
    print "}\n";
}
    else {
    print ".$ref\n{\n";
    print "height: 50px;\n";
    if ($page == 'testimonials'){
    print "margin-top: 5%;\n";
    }
    print "}\n";
}
}
?>