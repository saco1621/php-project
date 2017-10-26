
<!doctype html>
<html>
<head>
<link rel="stylesheet" tepe="text/css" href="thecss.css">
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
include("config.php");
?>

<body>
	
<div id="wholepage">

<div id="pageheader">
<img src="header-pic.jpg" class="pic">

<div id="topnav">
<table width="761" height="20" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="75" id="first" align="center"><a href="#" onClick="Lmenu('Services')" onMouseOut="none">Services</a></td>
<td width="75" id="first" align="center"><a href="#" onClick="Lmenu('Food')" onMouseOut="none">Work</a></td>
<td width="74" id="first" align="center"><a href="#" onClick="Lmenu('About')" onMouseOut="none">About us</a></td>
<td width="74" id="first" align="center"><a href="Contactpage.php" onClick="Lmenu('Contact us')" onMouseOut="none">Contact Us</a></td>

</tr>
</table>

<div id="submenu" class="word_yellow">&nbsp;</div></td>

</div>
				
</div>

<script language="javascript">
function Lmenu(value){
	switch(value){
		case "Services":
			submenu.innerHTML="<a href='shops.php'>Shops</a>|<a href='#'>Toilet and Wifi</a>|<a href='#'>Information center</a>|";
			break;
			
		case "Food":
			submenu.innerHTML="<a href='#'>Max burger</a>|<a href='#'>Pressbyren</a>|<a href='#'>Starbark</a>";
			break;
			
		case "About":
			submenu.innerHTML="<a href='aboutnavoda.php'>About Nevoda</a>|<a href='aboutpage.php'>About Nassjo central</a>|<a href='aboutpage.php'>about development</a>";
			break;
	}

}


</script>		
</div>
</body>
</html>
