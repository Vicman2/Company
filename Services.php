<?php
	require_once("sunEngUtility.php");
?>


<!DOCTYPE html>
	<html>
		<head>
			<title> SUNENG AND WORKS LIMITED </title>
			<link href="EngCss/bootstrap.min.css" rel="stylesheet" type="text/css" />
			<link href="EngCss/EngDes.css" rel="stylesheet" type="text/css" />
			<link rel="shortcut icon" href="Images/favicon.ico" type="image/icon" />
			<link rel="icon" href="Images/favicon.ico" type="images/icon" />
			<meta name="viewport" content="width=device-width initial-scale = 1.0">
			<meta name="description" content="Enginnering Machines, Industrial Machines, SUNENG and works limited" />
			<meta name="keywords" content="SUNENG, works, indusrial machines" />
			<meta http-equiv="author" content="vicman" />
		</head>
		
		
		<body>
		
		<div class="container">
		
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
						<span class="sr-only"> Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="">SUNENG</a> 
				</div>
				<div class="collapse navbar-collapse" id="example-navbar-collapse">
						<ul class="nav navbar-nav" id="listIcon">
							<li><a href="index.php"> Home</a></li>
							<li><a href="Machines.php">Machines</a></li>
							<li class="divider"></li>
							<li class="active"><a href="Services.php">Services</a></li>
							<li class="divider"></li>
							<li><a href="Contact.php">Contact</a></li>
							<li class="divider"></li>
							<li><a href="AboutUs.php"> About Us</a></li>
						</ul>
				</div>
			</nav>
			
			<div class="row">
				<img id="logo" src="Images/logo.jpg" class="img-circle" />
			</div>
			
			
			<div class="row content">
			
			
			<p id="services"> OUR SERVICES</p>
			
			<ul class="list-group" id="show"> 
					 <li class="list-group-item changeMe">To carry on the business of welding works, fabrications, 
						 drinages, sales and supply of rod, manufacturing, sales of all kind of welding materials,
						wholesale, retail and manufacturers representatives, sewage systems, boreholes, land
						excavators and tractor or caterpillars.
					</li> 
					<li class="list-group-item changeMe">
						To carry on the business of mechanical , electrical services, construction of industrial 
						machines, and repairs, and sales of such steel/metal materials, importers of building materials, 
						manufacturers representatives. estate agents, enviromental/sanitation services.
					</li>
					<li class="list-group-item changeMe">
						To carry on the business manufacturers of machinery, refurbishes of different kinds of machines,
						cars, engines, undertakers of plumbing business, corrugating of sheets, and establishers of such machines
						in any part of the federation and to as fitters, painters, panel beaters and transporters.
					</li>
					<li class="list-group-item changeMe">
						To engage in the business of telecommunication services, sales and installation of terminal or
						other equipments, telecommunication equipments, cyber cafe, internet and general communication,
						sales and services, information technology, and sales of computers, installation and maintenance,
						wireless, repairs, software, development, hardware repairs and computer services, telecom services and
						sales of telecom equipment/sales and importation  of GSM Handsets and accessories.
					</li>
					<li class="list-group-item changeMe">
						To carry on the business as industrial contractors, engage in the maintenance, fabrication,
						refurbishing, repairing and acquisition of paint mixing machines, adhensive mixing machines, Garri
						processing machines, Bread mixing and millers and other agro Allied equipments: Bore mills, feed mills and etc.
					</li>
					<li class="list-group-item changeMe">
						To carry on business as industrial contractors, engage in the maintenance, refurbishing, repairing and 
						acquisition of industrial plants and machinery, earthmoving heavy duty and light duty construction equipments,
						as well as agricultural implements.
					</li>
					<li class="list-group-item changeMe">
						To establish a palm kernel cracker, palm oil miller, palm kernel cake as by-product and finished product.
					</li>
					<li class="list-group-item changeMe">
						To do all such other things as may be considered to be incidental or conductive to attainmentof the 
						above objects or any of them.
					</li>
				</ul>
			
			</div>
			
			
		<?php
			footer($adjust = false);
		?>