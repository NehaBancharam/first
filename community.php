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
			<a class="navbar-brand" href="index.php"><img src="img/reef-logo.png"></a>
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
	<div class="title-text mobile-font">
		<hl>Community Outreach and Conservation</hl>
	</div>
</div>


<!--section 1-->
<div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<img src="img/community.jpg">
			</div>
			<div class="col-md-6 col-sm-6 text-center">
				<h2>About Community Outreach projects</h2>
				<p class="lead">Marine Conservation can only be successful if the primary resource users and stakeholders have the necessary tools to manage the coastal and marine environment. Reef Conservation has been promoting community participation by reaching out to fisher groups, tourism stakeholders and coastal communities to encourage them to take a leading role in the conservation of their resources locally, village by village, all the while supporting and implementing practical, hands-on conversation tools through three projects.</p>
			</div>
		</div>
	</div>
</div>

<!--cards-->
<div class="padding">    
      <div class="container">
      	<h2 class="text-center title">Community Outreach projects</h2>

        <div class="cardheight border col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <img src="img/marinepark.jpg" class="img-responsive">
          <h3 class="text-center">Marine Protected Areas <br> (MPAs)</h3>
          <p>Marine Conservation can only be successful if the primary resource users and stakeholders have the necessary tools to manage the coastal and marine environment.</p>
          <a href="mpa.php" class="read btn btn-default btn-lg">Read more...</a>
        </div>
        <div class="cardheight border col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <img src="img/VMCA.jpg" class="img-responsive">
          <h3 class="text-center">Voluntary Marine Conservation Areas (VMCAs)</h3>
          <p>Voluntary Marine Conservation Areas (VMCAs) are selected sites in the lagoon where resource users and coastal communities agree that no extractive or destructive activities will be done.</p>
          <a href="vmca.php" class="read btn btn-default btn-lg">Read more...</a>
        </div>
        <div class=" cardheight border col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <img src="img/buoys.jpg" class="img-responsive">
          <h3 class="text-center">Fixed Mooring Buoys <br>(FMBs)</h3>
          <p>Fixed Mooring Buoys (FMBs) are deployed to protect the coral from anchor damage caused by the indiscriminate use of anchors at sites, which breaks the coral and degrades the ecological integrity of the area.</p>
          <a href="fmb.php" class="read btn btn-default btn-lg">Read more...</a>
        </div>
        
      </div>    

</div>

<?php include ('footer.php');?>