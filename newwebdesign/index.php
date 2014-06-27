<!DOCTYPE html>
<body>
<head>
    <meta content="text/html; charset=utf-8"
          http-equiv="Content-Type">
    <link href="style.css"
          rel="stylesheet"
          type="text/css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="mobile.css" media="screen and (max-width: 480px)">
    <link rel="stylesheet" type="text/css" href="medium.css" media="screen and (max-width: 700px)">
  
    <title>
      London News Pictures | Public Relations Photography
    </title>
</head>
<header>
   <ul id="menu">
  <li class="menu-item">
    <a href="#" class="menu-link">Home</a>
  </li>
  <li class="menu-item">
    <a href="#" class="menu-link is-active">About Us</a>
  </li>
  <li class="menu-item">
    <a href="#" class="menu-link">Our Work</a>
  </li>
  <li class="menu-item">
    <a href="#" class="menu-link">Contact Us</a>
  </li>
</ul>
</header>
        <p class="tagline">
        <em>A collaborative photographic agency run by professional editorial photographers throughout the UK. Supplying quality news and feature pictures.</em>
      </p>
        <img alt=
      "photograph of london made of lego at Lego Land, covered in snow. Woman sweeping snow from top of big ben"
           class="main"
           src="img/lego1.jpg">
            <div class="testblock">
        <?php
// Connect to the database
$hostname = "mysql.gwilki01.wdd1314.bbkweb.org";
$username = "gwilki01";
$password = "Edahze45imei";
$database = "gwilki01";

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql ='SELECT id, companyname, testimonialcontent, name FROM testimonials ORDER BY id';

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

while ($row = mysql_fetch_row($result)) {
    print '<div class="testimonial">';
    list ($id, $companyname, $testimonialcontent, $name) = $row;
    print "<h3>$companyname</h3>\n";
    print "<blockquote>$testimonialcontent</blockquote>\n";
    print "<p>$name</p>\n";
    print "</div>\n";
}
?>
            </div>
    <div style=clear:both></div>
    </div>
    </body> 
    