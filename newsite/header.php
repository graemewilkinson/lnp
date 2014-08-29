<html lang="en">
<head>
    <meta content="text/html; charset=utf-8"
          http-equiv="Content-Type">
        
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,400italic' rel='stylesheet' type='text/css'>
    <link href="style.css"
          rel="stylesheet"
          type="text/css">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
<script src='modernizr.custom.22910.js'></script>
<?php
if ($page == home) {
print "<link rel='stylesheet'\nhref='flexslider.css'\ntype='text/css'>\n";
print "<link rel='stylesheet'\nhref='round.php'\ntype='text/css'>\n";
print "<script src='jquery.flexslider.js'></script>\n";
print "<script type='text/javascript'>\n$(window).load(function(){\n$('.flexslider').flexslider();\n});\n</script>\n";
}
elseif ($page == clientpage || $page == ourwork){
print "<script src='jquery.mosaicflow.min.js'></script>\n";
print "<link href='mosiacstyle.css' rel='stylesheet' type='text/css'>\n";
}
else { "\n";
}
if ($page == ourwork){
    print "<style>";
    print "footer{\n";
    print "margin-top: 0;\n";
    print "}\n";
    print "</style>\n";
}
?>
    <title>
      London News Pictures | Public Relations Photography
    </title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="retina.css" media="screen and (min-width: 768px) and (max-width: 1024px) and (-webkit-min-device-pixel-ratio: 2)" />
    <link rel="stylesheet" type="text/css" href="medium.css" media="screen and (max-width: 1024px)" />
    <link rel="stylesheet" type="text/css" href="mobile.css" media="screen and (max-width: 480px)" />
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
    <a 
<?php
if ($page == home) {
print "class='menu-link is-active'";
}
else {
print "href='index.php' class='menu-link'";
}
?>>Home</a>
  </li>
  <li class="menu-item">
    <a 
<?php
if ($page == testimonials) {
print "class='menu-link is-active'";
}
else {
print "href='testimonials.php' class='menu-link'";
}
?>>Testimonials</a>
  </li>
  <li class="menu-item">
    <a
<?php
if ($page == ourwork) {
print "class='menu-link is-active'";
}
else {
print "href='ourwork.php' class='menu-link'";
}
?>
      >Our Work</a>
  </li>
  <li class="menu-item">
    <a
<?php
if ($page == contactus) {
print "class='menu-link is-active'";
}
else {
print "href='contact.php' class='menu-link'";
}
?>
>Contact Us</a>
  </li>
</ul>
   </div>
        
  