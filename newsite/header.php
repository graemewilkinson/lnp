<html lang="en">
<head>
    <meta content="text/html; charset=utf-8"
          http-equiv="Content-Type">
        
    <link href="style.css"
          rel="stylesheet"
          type="text/css">

<?php
if ($page == home) {
print "<link rel='stylesheet'\nhref='flexslider.css'\ntype='text/css'>";
print "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>";
print "<script src='jquery.flexslider.js'></script>";
print "<script type='text/javascript'>\n$(window).load(function(){\n$('.flexslider').flexslider();\n});\n</script>";
}
elseif ($page == clientpage || $page == ourwork){
print "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>";
print "<script src='jquery.mosaicflow.min.js'></script>";
print "<link href='mosiacstyle.css' rel='stylesheet' type='text/css'>";
}
else {
}
?>
    <title>
      London News Pictures | Public Relations Photography
    </title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="medium.css" media="screen and (max-width: 700px)" />
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
print "href='index.php'class='menu-link'";
}
?>>Home</a>
  </li>
  <li class="menu-item">
    <a 
<?php
if ($page == aboutus) {
print "class='menu-link is-active'";
}
else {
print "href='aboutus.php'class='menu-link'";
}
?>>About Us</a>
  </li>
  <li class="menu-item">
    <a
<?php
if ($page == ourwork) {
print "class='menu-link is-active'";
}
else {
print "href='testmosiac.php'class='menu-link'";
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
print "href='contactus.php'class='menu-link'";
}
?>
>Contact Us</a>
  </li>
</ul>
   </div>
        
  