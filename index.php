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
			<meta name="description" content="Construction of industrial machines such as paint-mixer. Repairs and rendering of all sorts of mechanical services" />
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
							<li class ="active"><a href=""> Home</a></li>
							<li><a href="Machines.php">Machines</a></li>
							<li class="divider"></li>
							<li><a href="Services.php">Services</a></li>
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
			
			<!-- The welcome message -->
			<div class="row">
				<div id="welcomeDiv" class="null">
				
					<div id="greetingMessage"> </div>
					<h2 id="welcome">You are  Welcome  </h2>
					
					<p class="detail"> <b><strong><em>SUNENG WORKS LIMITED</em></strong></b> is a mechanical industry that deals with mechanical works with state of art equipment, professional<br />
					and field experience. We have served both private and government agencies for the past 2 decades, providing mechanical equipments<br />
					and mechanical services, fabrication, construction and community services.
					</p>
					<p class="detail"> We construct high classic industrial and agricultural  machineries such as paint mixer,backery equipments, crushers, grinders, palm oil/kernel processing machines etc, that will aid your industrialization <br />
						move faster at an affordable rate...
					</p>
					
					<ul class="pager">
					<li class="next"><a href="AboutUs.php">More &rarr; </a></li>
				</ul>
					
				</div>
			</div>
			
			
			<div class="row" id="design" >
				<div id="inner">
				</div>	
			</div>
			
			
			<!-- This is where the list of what we do is embedded-->
			<div class="row">
				<div class="header">
					<h2 id="service_header">OUR SERVICES </h2>
				</div>
				<ul class="list-group" id="listOfServices"> 
					 <li class="list-group-item">To carry on the business of welding works, fabrications, 
						 drinages, sales and supply of rod, manufacturing, sales of all kind of welding materials,
						wholesale, retail and manufacturers representatives, sewage systems, boreholes, land
						excavators and tractor or caterpillars.
					</li> 
					<li class="list-group-item">
						To carry on the business of mechanical , electrical services, construction of industrial 
						machines, and repairs, and sales of such steel/metal materials, importers of building materials, 
						manufacturers representatives. estate agents, enviromental/sanitation services.
					</li>
					<li class="list-group-item">
						To carry on the business manufacturers of machinery, refurbishes of different kinds of machines,
						cars, engines, undertakers of plumbing business, corrugating of sheets, and establishers of such machines
						in any part of the federation and to as fitters, painters, panel beaters and transporters.
					</li>
					<li class="list-group-item">
						To engage in the business of telecommunication services, sales and installation of terminal or
						other equipments, telecommunication equipments, cyber cafe, internet and general communication,
						sales and services, information technology, and sales of computers, installation and maintenance,
						wireless, repairs, software, development, hardware repairs and computer services, telecom services and
						sales of telecom equipment/sales and importation  of GSM Handsets and accessories.
					</li>
					<li class="list-group-item">
						To carry on the business as industrial contractors, engage in the maintenance, fabrication,
						refurbishing, repairing and acquisition of paint mixing machines, adhensive mixing machines, Garri
						processing machines, Bread mixing and millers and other agro Allied equipments: Bore mills, feed mills and etc.
					</li>
					<li class="list-group-item">
						To carry on business as industrial contractors, engage in the maintenance, refurbishing, repairing and 
						acquisition of industrial plants and machinery, earthmoving heavy duty and light duty construction equipments,
						as well as agricultural implements.
					</li>
					<li class="list-group-item">
						To establish a palm kernel cracker, palm oil miller, palm kernel cake as by-product and finished product.
					</li>
					<li class="list-group-item">
						To do all such other things as may be considered to be incidental or conductive to attainment of the 
						above objects or any of them.
					</li>
				</ul>
				
			</div>
			
			<div class="row">
				
				
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 slide">
					<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="hover">
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
								<li data-target="#myCarousel" data-slide-to="4"></li>
								<li data-target="#myCarousel" data-slide-to="5"></li>
								<li data-target="#myCarousel" data-slide-to="6"></li>
								<li data-target="#myCarousel" data-slide-to="7"></li>
								<li data-target="#myCarousel" data-slide-to="8"></li>
								
							</ol>
							
							<div class="carousel-inner">
								<div class="item active">
									<a href="Machines.php"><img class="slideshow img-responsive ima" src="Images/Machine1.jpg" alt="Fourth slide" height="250px" width="250px" /></a>
									<div class="carousel-caption"></div>
								</div>
								<div class="item">
								<a href="Machines.php"><img class="slideshow img-responsive ima" src="Images/Machine2.jpg" alt="Fifth slide" height="250px" width="250px" /></a>
								<div class="carousel-caption"></div>
								</div>
								<div class="item">
									<a href="Machines.php"><img class="slideshow img-responsive ima" src="Images/Machine3.jpg" alt="Sixth slide" height="250px" width="250px" /></a>
									<div class="carousel-caption"></div>
								</div>
								
								<div class="item">
									<a href="Machines.php"><img class="slideshow img-responsive" src="Images/Machine4.jpg" alt="seventh slide" height="250px" width="250px" /></a>
									<div class="carousel-caption"></div>
								</div>
								<div class="item">
									<a href="Machines.php"><img class="slideshow img-responsive" src="Images/Machine5.jpg" alt="Ama" height="250px" width="250px" /></a>
									<div class="carousel-caption"></div>
								</div>
								<div class="item">
									<a href="Machines.php"><img class="slideshow img-responsive" src="Images/Machine6.jpg" alt="Yohe" height="250px" width="250px" /></a>
									<div class="carousel-caption"></div>
								</div>
								<div class="item">
									<a href="Machines.php"><img class="slideshow img-responsive" src="Images/Machine7.jpg" alt="seventh slide" height="250px" width="250px" /></a>
									<div class="carousel-caption"></div>
								</div>
							</div>	
							
							<a class="carousel-control left" href ="#myCarousel" data-slide="prev">&lsaquo;</a>
							<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
						</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 slide">
					<p id="explain"> The above  are some of our machines that might be of great help to you.
					Remember that without industrail machines, industrialization cannot be acheived.
					 The machines we build are 
					issued under gurantee. The main reason why most compaines rely in our machines for thier
					industrialization is the high degree of satisfaction and lasting comfort they derive from it.
					If the machine you are looking for is not here, you can notify us so that we can construct and 
					customize your machine in a favourable way that you will derive satisfaction from it.<br />
					You are one click away from having your own machines and services.
					To know more about what the above machine does, kindly <a href="Machines.php">click here.</a> </p>
					
					
				</div>
				
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 aboutUs ">
					
				
						<h1 id ="aboutUs"> ABOUT US  </h1>
						
						<p id="aboutDetail"> The company <b><strong>SUNENG</strong></b> was founded in 1982, SUNENG AND WORKS LIMITED develop into an inventive state of craft 
						company in mechanical and civil Enginnering. We ensure that our staffs, technicians and engineers are properly trained to call them
						to terms with the latest technology and industry best practices. We are equipped with mordern mechaneries and equipment for construction 
						to ensure that Jobs...</p>
						<button type="button" class="btn "><a href="AboutUs.php"> More about us&rarr; </a></button>
						
					
				</div>
			
			
			
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<img class="slideshow img-responsive" src="Images/CEO.jpg"  height="200px" width="250px" />
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<img class="slideshow img-responsive" src="Images/Founder.jpg"  height="200px" width="250px" />
				</div>
			
			</div>
			
				
			
			<!-- This is the picture of the man with machine -->
			<div class="row" id="Display" >
				<div id="inner1">
					<p id="innerText"> We<br /> are <br /> here<br /> to<br /> serve<br /> you </p>
					<p id="innerText1"> One with God is majority.... </p>
				</div>	
			</div>
			
			<!--This is where the footer starts -->
			<?php
				footer($adjust = false);
			?>