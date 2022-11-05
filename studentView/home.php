<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Online exam</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                   <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">General Info</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Courses taken</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Exams</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#res">Result</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome back!</div>
                <div class="masthead-heading text-uppercase">Ready for a quiz?</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Current exam</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">General Info</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                
				
				
				
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3">  Student ID </div>
				<div class="col-md-3">  Student Name </div>
				<div class="col-md-3">  email </div>
			    <div class="col-md-3">  department </div>
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("dbconnect.php");
			
			
				 //echo $_GET['user'];
				 			
			$k = $_GET['user'];
			
			
			$sql = "SELECT std_id, name, email, major FROM `student` WHERE name = '$k'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
			while($row=mysqli_fetch_array($result)){
				?>
                <div class="row" style="padding:5px;"> 
				<div class="col-md-3">  <?php echo $row[0]; ?> </div>
				<div class="col-md-3">  <?php echo $row[1]; ?> </div>
			    <div class="col-md-3">  <?php echo $row[2]; ?> </div>
				<div class="col-md-3">  <?php echo $row[3]; ?> </div>
				</div>
			<?php
				}
			}
			?>
				
				
				
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Courses taken</h2>
                    <h3 class="section-subheading text-muted">list of your courses:</h3>
                </div>
				
				
					<?php 
			require_once("DBconnect.php");
			$curse=$_GET['user'];
			$sid = "SELECT std_id FROM `student` WHERE name = '$curse';";
			$res=mysqli_query($conn,$sid);
			$row0= mysqli_fetch_array($res);
			$sql = "SELECT c_code, semester,faculty_id FROM `assigned_to` WHERE std_id='$row0[0]';";
			$result = mysqli_query($conn, $sql);
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div class="row" style="padding:5px;"> 
			
			
				<div class="col-md-3"> <?php echo "course code:"; ?> <?php echo $row[0]; ?> </div>
				<div class="col-md-3">  <?php echo "Semester:"; ?>  <?php echo $row[1]; ?> </div>
				<div class="col-md-3">  <?php echo "faculty initial:"; ?>  <?php echo $row[2]; ?> </div>
				
			</div>
			
			<?php 
				}					
			
			?>
				
				
                
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Exams</h2>
                    <h3 class="section-subheading text-muted">important:Mark these dates on your calender!</h3>
                </div>
				
				
			<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
			<div class="row" style="padding:5px;"> 
				
		
			</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("DBconnect.php");
			
			
			
			$curse=$_GET['user'];
			
			$sid = "SELECT std_id FROM `student` WHERE name = '$curse';";
			$res=mysqli_query($conn,$sid);
			$row0= mysqli_fetch_array($res);
			$eid = "SELECT exam_id FROM  `attend` WHERE std_id='$row0[0]';";
			$res2= mysqli_query($conn,$eid);
			$row1= mysqli_fetch_array($res2);
			$code = "SELECT c_code FROM `exam` WHERE exam_id='$row1[0]';";
			
			$res3= mysqli_query($conn,$code);
			$row2= mysqli_fetch_array($res3);

            $sql = "SELECT type, weight,total_qs, date, time, duration FROM exam WHERE c_code='$row2[0]';";	
			
			
			$result = mysqli_query($conn, $sql);
			
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div class="row" style="padding:5px;"> 
			
				<div class="col-md-3"> <?php echo "type:"; ?> <?php echo $row[0]; ?> </div>
				<div class="col-md-3">  <?php echo "weight:"; ?>  <?php echo $row[1]; ?> </div>
				<div class="col-md-3">  <?php echo "total_qs:"; ?>  <?php echo $row[2]; ?> </div>
				<div class="col-md-3">  <?php echo "date:"; ?>  <?php echo $row[3]; ?> </div>
				<div class="col-md-3">  <?php echo "time:"; ?>  <?php echo $row[4]; ?> </div>
				<div class="col-md-3">  <?php echo "duration:"; ?>  <?php echo $row[5]; ?> </div>
			</div>
			
			<?php 
				}					
			
			?>
			 <div class="card-footer">
          <a href="examred.php"class="btn btn-primary"> More exams!</a>;
          </div>
			
		</div>	
				
				
				
				
				
				
				
				
                
            </div>
        </section>
		
		
		
		<!-- Contact-->
        <section class="page-section" id="res">
             <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Results</h2>
                    <h3 class="section-subheading text-muted">astronomia.mp3</h3>
                </div>
				
				
			
				
					<?php 
			require_once("DBconnect.php");
			$curse=$_GET['user'];
			$sid = "SELECT std_id FROM `student` WHERE name = '$curse';";
			$res=mysqli_query($conn,$sid);
			$row0= mysqli_fetch_array($res);
			$sql = "SELECT exam_id, obtained_marks FROM `attend` WHERE std_id='$row0[0]';";
			$result = mysqli_query($conn, $sql);
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div class="row" style="padding:5px;"> 
			
			
				<div class="col-md-3"> <?php echo "course code:"; ?> <?php echo $row[0]; ?> </div>
				<div class="col-md-3">  <?php echo "marks:"; ?>  <?php echo $row[1]; ?> </div>
				
				
			</div>
			
			<?php 
				}					
			
			?>
				
				
				
				
				
				
				
                
            </div>
        </section>
		
		
		
		
		
		
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4>Aminul Haque Shihab</h4>
                            <p class="text-muted">Admin to configure time limit</p>
                            
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/shihab4162/"><i class="fab fa-facebook-f"></i></a>                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" />
                            <h4>Aminul Islam</h4>
                            <p class="text-muted">checking the attempted questions, number of right answers and wrong answers</p>
                            
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=100006903917206"><i class="fab fa-facebook-f"></i></a>
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4>Anika p. Mrittika</h4>
                            <p class="text-muted">Add, delete, display questions</p>
                           
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/mrittika6104/"><i class="fab fa-facebook-f"></i></a>
                            
                        </div>
                    </div>
					 <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/4.jpg" alt="" />
                            <h4>Ridwan Hossain</h4>
                            <p class="text-muted">answer submission</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/ridwan.4496/"><i class="fab fa-twitter"></i></a>
                      
                        </div>
                    </div>
					 <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/5.jpg" alt="" />
                            <h4>Sherajus Salehin</h4>
                            <p class="text-muted">show User info</p>
                            
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/sherajussalehin.sakafe.1/"><i class="fab fa-facebook-f"></i></a>
                           
                        </div>
                    </div>
					 <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/6.jpg" alt="" />
                            <h4>Zuhair Hossain</h4>
                            <p class="text-muted">User registration, Log in for users and admin</p>
                            
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/zuhair.hossain/"><i class="fab fa-facebook-f"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Cse 370 , project-Online exam, project-id:5</p></div>
                </div>
            </div>
        </section>
       
     
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
