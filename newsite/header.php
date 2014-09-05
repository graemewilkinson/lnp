<html lang='en'>
<head>
<script>
document.cookie = 'device_dimensions=' + screen.width + 'x' + screen.height;
</script>
    <meta content='text/html; charset=utf-8'
          http-equiv='Content-Type'>
        
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,400italic' rel='stylesheet' type='text/css'>

<?php
    print "<link href=\"style.php?page=$page\" rel=\"stylesheet\" type=\"text/css\">\n";
?>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
<script src='modernizr.custom.22910.js'></script>
<?php
if ($page == 'home') {
print "<link rel='stylesheet'\nhref='flexslider.css'\ntype='text/css'>\n";
print "<script src='jquery.flexslider.js'></script>\n";
print "<script type='text/javascript'>\n$(window).load(function(){\n$('.flexslider').flexslider();\n});\n</script>\n";
}
elseif ($page == 'clientpage' || $page == 'ourwork'){
print "<script src='jquery.mosaicflow.min.js'></script>\n";
print "<link href='mosiacstyle.css' rel='stylesheet' type='text/css'>\n";
}
    print "<title>";
    if ($page == 'clientpage'){
    include 'login.php';

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql ='SELECT companyname FROM testimonials WHERE id = '. $_GET['id'];

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());

 $row = mysql_fetch_row($result);
    list ($companyname) = $row;
        print "$companyname | Our Work | London News Pictures | Public Relations Photography\n";
    } 
        else {
        print "$pagetitle | London News Pictures | Public Relations Photography\n";
    }
    print "</title>";
?>
    

<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <link rel='stylesheet' type='text/css' href='medium.php' media='screen and (max-width: 1024px)' />
    <link rel='stylesheet' type='text/css' href='mobile.css' media='screen and (max-width: 568px)' />
</head>
<body>
<div class='wrapper'>
<header>
    <h1>
    <?php if($page == 'home'){
    }
    else {
        print "<a href='index.php'>";
    }
    ?><img alt='<?php
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
        ?>'
              class='logo'
              src='img/lnplogo.svg'>
   <?php if ($page == 'home'){
    }
    else {
    print "</a>";
    } ?>
</h1>
</header>
        <div>
   <ul id='menu'>
  <li>
    <a 
<?php
if ($page == home) {
print "class='is-active'";
}
else {
print "href='index.php'";
}
?>>Home</a>
  </li>
  <li>
    <a 
<?php
if ($page == testimonials) {
print "class='is-active'";
}
else {
print "href='testimonials.php'";
}
?>>Testimonials</a>
  </li>
  <li>
    <a
<?php
if ($page == ourwork) {
print "class='is-active'";
}
else {
print "href='ourwork.php'";
}
?>
>Our Work</a>
  </li>
  <li>
    <a
<?php
if ($page == contactus) {
print "class='is-active'";
}
else {
print "href='contact.php'";
}
?>
>Contact Us</a>
  </li>
</ul>
   </div>
        
  
