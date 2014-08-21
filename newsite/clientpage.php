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
    <style>
        
* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	}

body {
	font-family:"Helvetica Neue", Arial, sans-serif;
	}

.mosaicflow__column {
	float:left;
	}

.mosaicflow__item {
	position:relative;
	}
	.mosaicflow__item img {
		display:block;
		width:100%;
		max-width:800px;
		height:auto;
		}
	.mosaicflow__item p {
		position:absolute;
		bottom:0;
		left:0;
		width:100%;
		margin:0;
		padding:5px;
		background:hsla(0,0%,0%,.5);
		color:#fff;
		font-size:14px;
		text-shadow:1px 1px 1px hsla(0,0%,0%,.75);
		opacity:0;
		-webkit-transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		   -moz-transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		     -o-transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		        transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		}
	.mosaicflow__item:hover p {
		opacity:1;
		}
	
    </style>
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
        <div id="nav">
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
        <div style="clear: both"></div>
<?php
// Connect to the database
// Normal kept in a separate file and used with include()
$hostname = "mysql.gwilki01.wdd1314.bbkweb.org";
$username = "gwilki01";
$password = "Edahze45imei";
$database = "gwilki01";

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

$sql ="SELECT imagelink, imagedes FROM img WHERE id = " . $_GET['id'];
$sql ="SELECT companyname FROM testimonials WHERE id = " . $_GET['id'];

// run the query
$result = mysql_query($sql,$link) or die("Unable to select: ".mysql_error());


while ($row = mysql_fetch_row($result)) {
    
    list($imagelink, $imagedes) = $row;
    print "<h1>$companyname</h1>\n";
    print "<div class='clearfix mosaicflow'>\n";
    print "<div class='mosaicflow__item'>\n";
    print "<img src='img/$imagelink' alt='$imagedes'>";
    print "</div>\n";
}
print "</div>\n";

?>                                  
<div style="clear: both;"></div>
</div>

</body>
</html>
