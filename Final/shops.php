<!DOCTYPE html>

<html>
	<head>
		<title>Shops</title>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, width=device-width"/>
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,700i,900" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/file.js"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>

		<style type="text/css">
		body,html{
			height: 100%;

		}
		.parallax{
			background-image: url(refreshments.jpg);
			min-height: 300px;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 100%;

		}

@media only screen and (max-device-width: 1024px) {
    .parallax {
        background-attachment: scroll;
    }
}
		</style>
	</head>
	
	<body>

			

<?php include 'header.php'; ?>

<div class="parallax"></div>

<div style="height: 700px;background-color: skyblue;font-size: 36px">
	
	
	Logos for shops will be here and more information

</div>
			

	</body>
	<?php
	echo include 'footer.php';
?>
</html>