<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8;charset=utf-8" />


<script type="text/javascript">
$(document).ready(function() {
	
$("ul#topnav li").hover(function() { //Hover over event on list item
	$(this).css({ 'background' : '#1376c9 url(topnav_active.gif) repeat-x'}); //Add background color + image on hovered list item
	$(this).find("span").show(); //Show the subnav
} , function() { //on hover out...
	$(this).css({ 'background' : 'none'}); //Ditch the background
	$(this).find("span").hide(); //Hide the subnav
});
	
});
</script>
<style type="text/css">
body {
	font: 10px normal Verdana, Arial, Helvetica, sans-serif;
	margin: 0;
	padding: 0;
	
}
h1 {
	font: 4.7em normal Georgia, 'Times New Roman', Times, serif;
	color: #333;
	margin: 0;
	padding: 5px 0;
}
h1 small{
	font: 0.2em normal Verdana, Arial, Helvetica, sans-serif;
	text-transform:uppercase;
	letter-spacing: 1.5em;
	display: block;
	color: #fff;
}
.container {width: 970px; margin: 0 auto;}



ul#topnav {
	margin: 0; padding: 0;
	float: left;
	width: 1500px;
	list-style: none;
	position: relative;
	font-size: 1.2em;
	background:url(topnav_s.gif) repeat-x;
}
ul#topnav li {
	float: left;
	margin: 0; padding: 0;
	border-right: 1px solid #555;
}
ul#topnav li a {
	padding: 10px 15px;
	display: block;
	color: #f0f0f0;
	text-decoration: none;
}
ul#topnav li:hover { background: #1376c9 url  url(topnav_s.gif) repeat-x; }
ul#topnav li span {
	float: left;
	padding: 15px 0;
	position: absolute;
	left: 0; top:35px;
	display: none;
	width: 1300px;
	background:#2D9C92;
	color: #FFF;
	-moz-border-radius-bottomright: 10px;
	-khtml-border-radius-bottomright: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-bottomleft: 10px;
	-khtml-border-radius-bottomleft: 10px;
	-webkit-border-bottom-left-radius: 10px;
}
ul#topnav li:hover span { display: block; }
ul#topnav li span a { display: inline; }
ul#topnav li span a:hover {text-decoration: underline;}
</style>
</head>
<body>
<strong>
    <ul id="topnav">
       <li><a href="main.php">Login</a></li>
        <li><a href="index">Home</a></li>
   
         <li>
            <a href="files">Secretary</a>
            <span>
                <a href="">Register Secretary</a> |
                <a href="">List of Secretary </a>
                <a href=""></a>
            </span>
         </li>
         
          
         <li> 
            <a href=""> Profile </a>
            <span>
                <a href="">Change Profile</a> |
                <a href="">Change Password</a>
            </span>
        </li>
     
 
        
        <li><a href="main.php?page=about">About Us</a></li>
        <li><a href="main.php?page=contact">Contact Us</a></li>
		<li><a href="check_logout.php" onclick="return confirm('Are you sure want to logout?')">Logout</a></li>
       
  
    </ul>
	

</div>
</strong>
</body>
</html>

