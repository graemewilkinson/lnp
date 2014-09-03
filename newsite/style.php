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

*{
    font-family: 'Merriweather Sans', sans-serif;
}
body
{
    background-color: grey;
    margin: 0;
}
div.wrapper
{
    width: 80%;
    max-width: 960px;
    background-color: #fff;
    margin: auto;
    overflow: auto;
}
h1
{
    margin: 0;
}
h2.introtitle
{
	font-size: 1.3em;
	text-align: center;
}
header
{
    overflow: auto;
}
p.tagline
{
	clear: both;
        margin: 2%;
        margin-bottom: 3%;
}
img.mosiac
{
    width: 620px;
    height: 393px;
}
img.main
{
    width: 80%;
    margin: 0 10%;
}
blockquote
{
	font-style:italic;
	margin: 1em;
}
div.testimonial
{
	margin: 1%;
	width: 30.333%;
	display: inline-block;
	vertical-align: top;
}
div.testblock
{
    float: left;
    margin: 0 5%;
}
h2.client
{
  margin: 2%;  
}
.breadcrumb
{
    margin: 2% 0 0 2%;
    color: grey;
}
.breadcrumb a:visited
{
    color: grey;
}

#menu {
  /* List style */
  margin: 0;
  padding: 0;
  list-style-type: none;
  overflow: hidden;
  
  /* Layout */
  
}

.menu-item {
  display: block;
  float: left;
  width: 25%; /* 100/number of items */
}

.menu-link {
  display: block;
  background:url(img/sprite.gif);
  width: 100%;
  height: 50px;
  line-height: 50px; /* centres text vertically */
  text-decoration: none; /* removes underline */
  text-align: center; /* centres horizontally */
  color: white;
  box-shadow: inset white 0px 0px 2px;
}

/* hover state */
.menu-link:hover
{
  background-position: 0 -50px;
}

/* the current page, and when clicked */
.menu-link:active, .menu-link.is-active {
  background-position: 0 -100px;
}
img.logo
{
	width: 25%;
	max-width: 180px;
	margin: 2%;
}
.mosaicflow__column
{
    float:left;
}
.mosaicflow__item img
{
    display:block;
    width:100%;
    height:auto;
}
.Collage{

    /* define how much padding you want in between your images */
    padding:10px;

    }

.Collage img{

    /* ensures padding at the bottom of the image is correct */
    vertical-align:bottom;

    /* hide the images until the plugin has run. the plugin will reveal the images*/
    opacity:0;

    }
div.clientpagebtm
{
    width: 50%;
    padding: 4%;
    float: left;
}

/* footer */
footer
{
float: left;
width: 100%;
background-color: #1b5886;
color: white;
<?php
if ($_GET["page"] == 'ourwork'){
  print "margin-top: 0;\n";
}
else {
    print "margin-top: 3%;\n";
}
?>
}
ul.social
{
    list-style-type: none;
    text-align: center;
    margin: 3% 0 3% 0;
    padding: 0;
}
ul.social li
{
   display: inline;
   padding: 1%;
}
/* contact us page */
div.contactpage
{
    width: 45%;
    float: left;
    margin: 1em 2%;
}
input#Field1.field.text.fn
{
    width: 85%
}
input#Field3
{
    width: 85%;
}
input#Field2
{
    width: 85%;
}
textarea#Field4
{
    width: 95%;
}
img.phoneimg
{
    width: 7em;
}
.required
{
    color: red;
    font-size: 60%;
}
