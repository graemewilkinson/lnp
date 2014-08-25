<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html; charset=utf-8"
          http-equiv="Content-Type">
        
    <link href="style.css"
          rel="stylesheet"
          type="text/css">
        
        
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="jquery.mosaicflow.min.js"></script>    
    <title>
      London News Pictures | Public Relations Photography
    </title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="medium.css" media="screen and (max-width: 700px)" />
    <link rel="stylesheet" type="text/css" href="mobile.css" media="screen and (max-width: 480px)" />
   
   <link href="mosiacstyle.css"
          rel="stylesheet"
          type="text/css">
    
</head>
<body>
<div class="wrapper">
<header>
        <h1>
          <img alt="London News Pictures"
              class="logo"
              src="img/LNP_PR_167px.jpg">
        </h1>
        <div class="toptitle">
          Public Relations Photography
        </div>
        <div style="clear: both"></div>
</header>
        <div>
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
   </div>        
<?php
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