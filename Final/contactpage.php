<!DOCTYPE html>

<html>
	<head>
		<title>Project</title>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, width=device-width"/>
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,700i,900" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/file.js"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>
	</head>
	
	<body>
		<header>
			<!--<a href="index.html"><img class="logo" src="img/logo1.jpg"></a>
			
				<a href="#" class="showmenu">
					<img class="hamburgericon" src="img/hamburger.png">
				</a>
			
			<nav class="nav">

				<ul>
					<li><a href="workpage.html">Work</a></li>
					<li><a href="aboutpage.html">About</a></li>
					<li><a href="contactpage.html">Contact</a></li>
				</ul>
			</nav>
			
		</header>
		
		<main>
			<figure>
				<img class="peopleimg" src="img/contactimage.png">
			</figure>-->
<?php include 'header.php'; ?>

			<section class="contactcontent">
				<div class="contacttext">
					<h1>Please Contact US!!!</h1>
					<p>Please let us know what kind of project you have on your mind. Together we can create great material for the different needs that you have. There are no stupid projects! Send us a job request here and then we can start to work on your project. Try to describe your project with a few keywords and then we will contact you and you'll recieve a quotation. <br/> <br/> We can't wait to get in contact with you!
					</p>
				</div>
				<div class="theform">
					<form method="GET">

							<p>Please Contact us! <br/>Describe your problem below</p>
							<input type="name" name="name" placeholder="Name" required /><br/> 
							<input type="email" name="email" placeholder="E-mail" required /><br/>
							<textarea type="text" name="text" placeholder="Description" required></textarea>
							<input class="send" type="submit" value="Send" />

					</form>
				</div>

			</section>




		</main>
		
		

	</body>
	<?php
	echo include 'footer.php';
?>
</html>