<html lang='en'>
<head>
<script>
document.cookie = 'device_dimensions=' + screen.width + 'x' + screen.height;
</script>
    <meta content='text/html; charset=utf-8'
          http-equiv='Content-Type'>
<link href='http://necolas.github.io/normalize.css/3.0.1/normalize.css' rel='stylesheet' type='text/css'>        
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,400italic' rel='stylesheet' type='text/css'>

<?php
    print "<link href=\"styles/style.php?page=$page\" rel=\"stylesheet\" type=\"text/css\">\n";
?>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
<script src='js/modernizr.custom.22910.js'></script>
<?php
if ($page == 'home') {
print "<link rel='stylesheet'\nhref='styles/flexslider.css'\ntype='text/css'>\n";
print "<script src='js/jquery.flexslider.js'></script>\n";
print "<script type='text/javascript'>\n$(window).load(function(){\n$('.flexslider').flexslider();\n});\n</script>\n";
}
elseif ($page == 'clientpage' || $page == 'ourwork'){
print "<script src='js/jquery.mosaicflow.min.js'></script>\n";
print "<link href='styles/mosiacstyle.css' rel='stylesheet' type='text/css'>\n";
}
    print "<title>";

include 'include/login.php';
    
$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");
    if ($page == 'clientpage'){
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
    <link rel='stylesheet' type='text/css' href='styles/medium.php' media='screen and (max-width: 1024px)' />
    <link rel='stylesheet' type='text/css' href='styles/mobile.css' media='screen and (max-width: 568px)' />
</head>
<body>
<div class='wrapper'>
<header>
    <?php if ($page == 'home'){
    print "<img alt='London News Pictures logo' src='img/lnplogo.svg' />";
    }
    else {
        print "<a href='index.php'><img alt='link back to home page' src='img/lnplogo.svg' /></a>";
    }
    if ($page == 'clientpage'){
    print "<h1>$companyname</h1>\n";
    }
    elseif ($page == 'home'){
    print "<h1>London News Pictures</h1>\n";
    }
    else {
    print "<h1>$pagetitle</h1>\n";
    }       
?>
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
        
  
