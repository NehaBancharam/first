<?php 
	// Import Database Class
	 require './Classes/Database.php';
	// Initialise Database object
	 $database = new Database();
	 $nameWarn = 0; // Trigger to check if name wrong
 	session_start();

	// Check if fields are empty
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){

		// Remove any HTML tags from fields
		$name = strip_tags($_POST['name']);
		$email = strip_tags($_POST['email']);
		$message = strip_tags($_POST['message']);

        if(preg_match("/^([a-zA-Z' ]+)$/",$name)){
			// Valid name

            // Insert Record in Database
		    $database->query('INSERT INTO tblRecords (name, email, message) VALUES(:name, :email, :message)');

		    // Binds variables to values
		    $database->bind(':name', $name);
		    $database->bind(':email', $email);
		    $database->bind(':message', $message);
		    // Execute query
		    $database->execute();
		    // Points to next page after submission
		    header('Location:contact.php');
		    exit();
		}else{
			// Name wrong
            $nameWarn = 1;
        }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='icon' href='img/favicon.png'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="styles.css" rel="stylesheet" />
	<style>
		input[type=text],
		select,
		textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}


		input[type=submit] {
		  background-color: #e8491d;
		  color: white;
		  padding: 12px 20px;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		}

		input[type=submit]:hover {
		  background-color: #d43d13;
		}

		.container {
			border-radius: 5px;
			padding: 20px;
		}
		.active{
	    border-radius: 10%;
	    color: #c4daef!important;
	    text-shadow: 3px 2px 4px #000000;
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
				<li><a href="index.php">Home</a></li>
				<li class="dropdown">
          <a class="dropdown-toggle" href="" data-toggle="dropdown">Projects
          <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="community.php">Community and Outreach</a></li>
              <li><a href="research.php">Research and Monitoring</a></li>
              
            </ul>
        		</li>					
				<li><a href="team.php">Meet the team</a></li>
				<li><a class="active" href="contact.php">Contact us</a></li>
				
			</ul>
		</div>
	</div>
	</nav>
		<div class="title-text">
			<hl>Contact Us</hl><br>
		</div>
	</div>


	<!--cards-->
	<div class="padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<form method="POST">
						<label for="name">First Name</label>
						<input type="text" id="name" name="name" placeholder="Your name.." required>
						<?php 
							// Check if 'Submit' button is clicked
							if(isset($_POST['btnSend'])){
								// Checks if name is wrong
								if($nameWarn == 1){
									// Display error message
									echo "<span style='color:red'>*Name can only contain alphabets</span><br>";  
								}
							}
						?>
						<label for="email">Email</label> </br>
						<input type="email" id="email" name="email" placeholder="Your email.." required> </br><br>

						<label for="message">Subject</label>
						<textarea id="message" name="message" placeholder="Write something.." style="height:200px"required></textarea>

						
						<input type="submit" name="btnSend" value="Submit">
					</form>
				</div>

				<div class="col-md-6 col-sm-12">
		          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.4347440982438!2d57.59693801494673!3d-19.99026044534837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217daa3530e090a3%3A0xc57f24f009ce28e5!2sReef%20Conservation!5e0!3m2!1sen!2smu!4v1581689720503!5m2!1sen!2smu" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		        </div>
			</div>
		</div>

	</div>


<?php include ('footer.php');?>
	

	


