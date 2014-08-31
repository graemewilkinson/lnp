<html lang="en">
<head>
<script>
document.cookie = "device_dimensions=" + screen.width + "x" + screen.height;
</script>
    <meta content="text/html; charset=utf-8"
          http-equiv="Content-Type">
        
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,400italic' rel='stylesheet' type='text/css'>
    <link href="style.css"
          rel="stylesheet"
          type="text/css">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
<script src='modernizr.custom.22910.js'></script>
<?php
if ($page == 'home') {
print "<link rel='stylesheet'\nhref='flexslider.css'\ntype='text/css'>\n";
print "<link rel='stylesheet'\nhref='round.php'\ntype='text/css'>\n";
print "<script src='jquery.flexslider.js'></script>\n";
print "<script type='text/javascript'>\n$(window).load(function(){\n$('.flexslider').flexslider();\n});\n</script>\n";
}
elseif ($page == 'clientpage' || $page == 'ourwork'){
print "<script src='jquery.mosaicflow.min.js'></script>\n";
print "<link href='mosiacstyle.css' rel='stylesheet' type='text/css'>\n";
}
elseif ($page == 'testimonials'){
    print "<link rel='stylesheet'\nhref='round.php?page=$page'\ntype='text/css'>\n";
}
else { "\n";
}
if ($page == 'ourwork'){
    print "<style>";
    print "footer{\n";
    print "margin-top: 0;\n";
    print "}\n";
    print "</style>\n";
}
    print "<title>";
    if ($page == 'home'){
        print "London News Pictures | Public Relations Photography\n";
    }
    elseif ($page == 'clientpage'){
        print "London News Pictures | Public Relations Photography | Our Work | Client Page\n";
    } 
        elseif ($page == 'ourwork'){
        print "London News Pictures | Public Relations Photography | Our Work\n";
    }
        elseif ($page == 'testimonials'){
        print "London News Pictures | Public Relations Photography | Testimonials\n";
    }
        elseif ($page == 'contactus'){
        print "London News Pictures | Public Relations Photography | Contact Us\n";
    }
    print "</title>";
?>
    

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="medium.css" media="screen and (max-width: 1024px)" />
    <link rel="stylesheet" type="text/css" href="mobile.css" media="screen and (max-width: 568px)" />
    <?php
    if ($page == testimonials || $page == home){
    print "<link rel='stylesheet' type='text/css' href='roundstack.php' media='screen and (max-width: 1024px)' />\n";
}
?>
    
</head>
<body>
<div class="wrapper">
<header>
    <h1>
    <?php if($page == 'home'){
    }
    else {
        print "<a href='index.php'>";
    }
    ?><img alt="London News Pictures | Public Relations Photography | <?php
    if ($page == 'home'){
        print "Home Page";
         }
        elseif ($page == 'ourwork'){
        print "Our Work";
        }
        elseif ($page == 'testimonials'){
        print "Testimonials";
        }
        elseif ($page == 'contactus'){
        print "Contact Us";
        }
        elseif ($page == 'clientpage'){
        print "Our work for $companyname";
        }
        ?>"
              class="logo"
              src="img/lnplogo.svg">
</h1>
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
        
  