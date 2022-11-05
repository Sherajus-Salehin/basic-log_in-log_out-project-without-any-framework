<!DOCTYPE html>
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Exam finder </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> Exam Finder </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="home.php"> Home </a> 
				<a href="#" style="margin-left: 20px;"> about </a> 
				<a href="#" style="margin-left: 20px;"> contacts  </a> 
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> </div>
		
		<form action="signin3.php" class="form_design" method="post">
			Course Code: <input type="text" name="fname"> <br/>
			<input type="submit" value="GO!">
		</form>
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

