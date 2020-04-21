<!DOCTYPE html>
<html>
<head>
  <title>Research and Monitoring</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='icon' href='img/favicon.png'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="styles.css" rel="stylesheet" />
  <style>
		.read{
	background-color: #e8491d!important;
	color: #ffffff!important;
	}
	.read:hover{
		background-color: #d43d13!important;
	}
	</style>
</head>

<body>
	
<!--banner-->
<div id="landingpages">
	<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="img/reef-logo.png"></a>
		</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-main">
			<ul class="nav navbar-nav navbar-right">
				<li><a class="active" href="index.php">Home</a></li>
				<li class="dropdown">
          <a class="dropdown-toggle" href="" data-toggle="dropdown">Projects
          <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="community.php">Community and Outreach</a></li>
              <li><a href="research.php">Research and Monitoring</a></li>
              
            </ul>
        		</li>					
				<li><a href="team.php">Meet the team</a></li>
				<li><a href="contact.php">Contact us</a></li>
				
			</ul>
		</div>
	</div>
	</nav>
	<div class="title-text">
		<hl>Research and Monitoring</hl>
	</div>
</div>



<!--section 1-->
<div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<a href="#"><img src="img/research.jpg"></a>
			</div>
			<div class="col-md-6 col-sm-6 text-center">
				<h2>About Research and Monitoring</h2>
				<p class="lead">Sound conservation management must be underpinned by scientific research. 
				Reef Conservation is working to establish baseline surveys in the adjacent lagoons of Anse-La-Raie,
				Roches Noires and Trou D’Eau Douce, to further understand the ecology of each site, 
				the causes of coral degradation, and actions that may help increase biodiversity and productivity of these sites.
				The lagoons of Mauritius are severely degraded. 
				Our research and monitoring programs are designed to help us further isolate the causes of degradation,
				and how an area might be able to recover from extensive damage.</p>
			</div>
		</div>
	</div>
</div>

<!--cards-->
<div class="padding">    
      <div class="container">
      	<h2 class="text-center title">Research and Monitoring projects</h2>

        <div class="cardheight border col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <img src="img/Habitat-map-of-Anse-la-Raie.png" class="img-responsive"><br><br><br>
          <h3 class="text-center"> Research and Monitoring at Anse-La-Raie </h3>
          <p>A rapid inventory of the lagoon of Anse-La-Raie was carried out in June 2010. 
		  The aim of this inventory was to provide us with baseline information about the marine habitats present in the lagoon.</p>
          <a href="Anse-La-Raie.php" class="read btn btn-default btn-lg">Read more...</a>
        </div>
        <div class="cardheight border col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <img src="img/Reef_roches_noires_lagoon_survey_map.png" class="img-responsive">
          <h3 class="text-center">Research and Monitoring in Roches Noires</h3>
          <p>A rapid inventory of the lagoon was carried out in 2010. This inventory was designed to validate the main area of Volunteer Roches Noires,
		  increase our knowledge of the marine environment and the different habitats present in the lagoon of Roches Noires.</p>
          <a href="Roche-Noire.php" class="read btn btn-default btn-lg">Read more...</a>
        </div>
      </div>    

</div>

<?php include ('footer.php');?>