<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='icon' href='img/favicon.png'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
  <link href="styles.css" rel="stylesheet" />
  <style>
    .active{
    border-radius: 10%;
    color: #c4daef!important;
    text-shadow: 3px 2px 4px #000000;
  }
  

  </style>
  
</head>

<body>
  
  
<!--banner-->
<div id="home">
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
  <div class="landing-text">
    <hl>Dedicated to the care of <br>Marine life</hl>
  </div>
</div>
<!--section 1-->
<div class="padding">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<img src="img/image1.jpg">
			</div>
			<div class="col-md-6 col-sm-6 text-center">
				<h2>About Reef Conservation</h2><br>
				<p class="lead content">Reef Conservation Mauritius is a non-profit organization dedicated to the conservation and the restoration of the costal and marine environment of Mauritius.It promotes sustainable use of the biodiversity of our marine ecosystems through local and regional efforts in a partnership approach with all concerned stakeholders. Reef Conservation Mauritius employs professional qualified biologists and support staff to manage and implement its projects.</p>
			</div>
		</div>
	</div>
</div>

<!--section 2 services-->
<div class="padding">    
      <div class="container">
        <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <a href="community.php"><img src="img/community.png" class="img-responsive"></a>
          <div class="text-center"><h3>Community Outreach</h3>
          <p>Reef Conservation has been focusing its work on reaching out to fisher groups, tourism stakeholders and coastal communities.</p>
        </div>
        </div>
        <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <a href="research.php"><img src="img/monitoring.png" class="img-responsive"></a>
          <div class="text-center"><h3>Research and Monitoring</h3>
          <p>Reef Conservation is working to establish baseline surveys to further understand the ecology of each site, the causes of coral degradation, and actions that may help increase biodiversity and productivity of these sites.</p></div>
        </div>
         
</div>
</div>

<!--stats-->
<div class="padding">
<div id="fixed">
	<div class="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="people">
                    <p class="counter-count num">3000</p>
                    <p class="people-p">People Sensitized</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="project">
                    <p class="counter-count num">50</p>
                    <p class="project-p">Projects Completed</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="coral">
                    <p class="counter-count num">70</p>
                    <p class="coral-p">Coral Species Saved</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="sites">
                    <p class="counter-count num">5</p>
                    <p class="sites-p">Protected Sites</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script type="text/javascript">
    $(".num").counterUp({delay:10,time:1000});
  </script>

<!--mission/vission-->
<div id="section2">
	<h1>Our Vision and Mission</h1>
</div>

<div class="padding">
	<div class="container">
		<div class="row">			
			<div class="col-md-6 col-sm-6 ">
				<h2 class="text-center">Mission</h2>
				<p class="lead content">Reef Conservation is dedicated to the conservation and restoration of the marine environment of Mauritius through the implementation and management of conservation, research, education and sensitization projects. It employs professional staff to implement and manage projects and train volunteer divers and to participate in ecosystem monitoring and other activities.</p>
			</div>
			<div class="col-md-6 col-sm-6">
				<h2 class="text-center">Values</h2>
				<p class="lead content">To perform our tasks with integrity, to promote education and sensitization about the marine environment and to always work towards solutions that integrates all stakeholders’ opinions in the conservation our marine environment.</p>
			</div>
		</div>
	</div>
</div>



<?php include ('footer.php');?>