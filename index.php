

<?php




if($_POST["submit"]){
	
	if(!$_POST["InputName"]) {
	
	$error="Enter name<br/>";
	
	}
	
	if(!$_POST["InputEmail"]) {
	
	$error=$error."Enter email<br/>";
	
	}
	if(!$_POST["InputMessage"]) {
	
	$error=$error."Enter Comment<br/>";
	
	}
	if ($_POST["InputEmail"]=="" AND !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  	$error=$error."Enter Valid Email<br/>";; 
	}
	
	$email_from = ' drirfanahmed28@medicareadvisors.in';
	$to = " drirfanahmed28@gmail.com"; // this is your Email address
    $from = $_POST['InputEmail']; // this is the sender's Email address
    $name = $_POST['InputName'];
   
    $subject = "Form submission";
    
    $message = $name . "having the email id :".$from . "\n \n Wrote the following:" . "\n\n" . $_POST['InputMessage'];
  

    $headers = "From:" . $email_from . "\r\n";
	$headers .= "Reply-To:". $from . "\r\n";
    
         
   
    
    // You can also use header('Location: thank_you.php'); to redirect to another page.
  
	
	if(!$error){
		if( mail($to,$subject,$message,$headers)) {
		
			echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
			
		
			$result='<div class="alert alert-success">Form Submitted</div>'.$error;
			$_POST["InputEmail"]="";
			$_POST["InputName"]="";
			$_POST["InputMessage"]="";
			
	
		} else{
			$result="Error in mailing";
		}
	} else {
		$result='<div class="alert alert-danger">'.$error.'</div>';
	}
}


$name="";
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
   
    <meta name="author" content="">

    <title>Koirn Med Advisors</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
 
    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css"> 
	<style>
	.small{
	
	margin-top:0;
	padding-top:0;
	}
	.toper{
	
	margin-bottom:10px;
	}
	.shadow {
    text-shadow: 2px 2px #000000;
}
	.gapp{

  margin: 10px 0;

	}
	.full{
background-size:cover;
width:100%;
background-position:center;
}
.centera{
padding-top:170px;
text-align:center;
color:white;
}
.gap {
padding-top:20px;
padding-bottom:20px;
}

.gap1 {
margin-top:35px;
margin-bottom:35px;
}
p{
margin:0;
padding:0;
}
balls{
margin:0;
padding:0;

}
.alert{
display:none;

}
	#InputName{
	font-size:15px;
	color:#B2BCC5;
	background:white;
	font-weight:400;
	
	}
	
	#workhead{
	font-size:1.9em;
	
	}
	
	.centar {
  margin: auto;

  
}

	.mover{
	padding-bottom:20px;
	 padding-left:50px;;
	}
	.mover2{
	padding-bottom:20px;
	 padding-left:70px;;
	}
	.textcenter{
	
	text-align:center;
	}
	.finger { cursor: pointer; cursor: hand; }
	</style>


	
	<script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->


</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    <div class="intro-header text-center ">
		<div class="col-md-12  abcen1 shadow">
			<h1  data-wow-delay="0.4s">KOIRN MED ADVISORS</h1>
			<span class="lead"><h3   data-wow-delay="0.6s">World Class High Quality Affordable Healthcare</h3></span>
			<ul class="list-inline intro-social-buttons">
				
				<li id="download" ><a href="#about" class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s"><span class="network-name">About us</span></a>
				</li>
				<li id="download" ><a href="#work" class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s"><span class="network-name">Find out how it works!</span></a>
				</li>
			</ul>
		</div>    
        <!-- /.container -->
		<div class="col-md-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
			</div>
		</div>
    </div>
	
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">KMA</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="#whatis">Specialities</a></li>
					<li class="menuItem"><a href="#about">About Us</a></li>
					<li class="menuItem"><a href="#whyUs">Why pick us?</a></li>
					<li class="menuItem"><a href="#work">How it works?</a></li>
					<li class="menuItem"><a href="#contact">Contact</a></li>
				</ul>
			</div>
		   
		</div>
	</nav> 
	
	<!-- Specialities -->
	<div id="whatis" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Specialities</h2>
				<p class="lead" style="margin-top:0">In partnership with hospitals and multi-speciality clinics of international repute.</p>
					<p class="lead small" style="margin-top:0">(Click on the icons to know more)</p>
			</div>
			
			<div class="row">
				
				<div class="col-sm-4 wow fadeInDown text-center finger" id="orth">
				  <img class="rotate" src="img/icon/ortho.svg" alt="Generic placeholder image">
					<h3>Orthopaedic</h3>
				  <div class="lead" id="listings" ></div>

				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
			
					
				
				<div class="col-sm-4 wow fadeInDown text-center finger" id="cancer">
				  <img  class="rotate" src="img/icon/cancer.svg" alt="Generic placeholder image">
				   <h3>Cancer</h3>
				   <p class="lead"></p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
			
				<div class="col-sm-4 wow fadeInDown text-center finger" id="cardio">
				  <img  class="rotate" src="img/icon/cardio.svg" alt="Generic placeholder image">
				   <h3>Cardiology</h3>
					<p class="lead"></p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
				
			<div class="row ">
			
				<div class="col-sm-4  wow fadeInDown text-center finger" id="gen">
				  <img class="rotate" src="img/icon/general.svg" alt="Generic placeholder image">
				  <h3>General Surgery</h3>
				  <p class="lead"></p>
				 <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center finger" id="ent">
				  <img  class="rotate" src="img/icon/ENT.svg" alt="Generic placeholder image">
				   <h3>ENT</h3>
				   <p class="lead"></p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center finger" id="cosmo">
				  <img  class="rotate" src="img/icon/Cosmo.svg" alt="Generic placeholder image">
				   <h3>Cosmetology </h3>
				 <p class="lead"></p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
			
			<div class="row ">
			
				<div class="col-sm-4  wow fadeInDown text-center finger" id="dent">
				  <img class="rotate" src="img/icon/Dentist.svg" alt="Generic placeholder image">
				  <h3>Dentistry</h3>
				  <p class="lead"></p>
				 <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center finger" id="optha">
				  <img  class="rotate" src="img/icon/opthal.svg" alt="Generic placeholder image">
				   <h3>Ophthalmology</h3>
				   <p class="lead"></p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center" id="uro">
				  <img  class="rotate" src="img/icon/urology.svg" alt="Generic placeholder image">
				   <h3>Urology</h3>
				 <p class="lead"></p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
			
			
			<div class="row ">
			
				<div class="col-sm-6  wow fadeInDown text-center finger" id="gas">
				  <img class="rotate" src="img/icon/gas.svg" alt="Generic placeholder image">
				  <h3>Gastroenterology</h3>
				  <p class="lead"></p>
				 <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-6 wow fadeInDown text-center finger" id="neu">
				  <img  class="rotate" src="img/icon/neurology.svg" alt="Generic placeholder image">
				   <h3>Neurology</h3>
				   <p class="lead"></p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				
				
			</div><!-- /.row -->
			
		</div>
	</div>
	
<!-- 	About us -->


	<div id="about" class="content-section-c ">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center white">
				<h2>About Us</h2>
				</div>
				<div class="col-sm-12 white">
				<p class="lead">KOIRN MED ADVISORS is a trusted provider of medical tourism services to
individuals seeking swift and hassle free medical treatments in India at an
affordable price. Dedicated to provide high quality care, we strongly believe
in healthcare for all. We want everyone to have greater control of their
health and well being and aim to deliver them quality healthcare services
that are compassionate and affordable.We provide online consultation and assist you to
choose the best hospitals that are appropriate for your medical needs. The
hospitals in our network are amongst the most advanced with world class
facilities and host specific programs that are carefully designed to attract
international medical tourism patients such as you. </p>

			<div class="container">
				<div class="row">
					<div class=" text-center">

				
						<a  class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s" id="moreinfo"><span class="network-name">More Info</span></a>
			
					</div>
				</div>
			</div>

<!--  -->
				</div>
				
				
			 </div>
			
			</div>
		</div>
		
	
	<!-- Use it -->
    <div id ="useit" class="content-section-a">

        <div class="container">
			
            <div class="row">
			
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/doctor1.png" alt="">
                </div> 
				
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading"><em>OUR PASSION</em></h3>
					
                    <p class="lead">
						We strive to combine the highest standards of medical excellence and the best of service to create a global wellness company. Our aim is to offer surgery with maximum care and minimal invasion of body whenever possible.
					</p>

					 
				</div>   
            </div>
        </div>
        <!-- /.container -->
    </div>

    <div class="content-section-b"> 
		
		<div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig">
     				<img  class="img-responsive img-rounded" src="img/doctor2.png" alt="">
				</div> 
			     
                
				
                <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">   
                    <h3 class="section-heading"><em>OUR VISION</em></h3>
					
                    <p class="lead">
						To provide the best medical care internationally at the best prices and heal the body and the soul with a combination of medication, indulgence and travel.
					</p>

					 
				</div>  			
			</div>
        </div>
    </div>

    <div class="content-section-a">

        <div class="container">

             <div class="row">
			  <div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/doctor3.png" alt="">
                </div> 
			 
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                
                 <h3 class="section-heading"><em>OUR MISSION</em></h3>
                    <p class="lead">
                    <ul > 
                    <li class="lead gapp"><span class="glyphicon glyphicon-circle-arrow-right"></span>Usage of latest medical equipment and technology</li>
                    
					<li class="lead gapp"><span class="glyphicon glyphicon-circle-arrow-right"></span>Most of our doctors are either trained, have worked or are associated abroad.</li>
					
					<li class="lead gapp"><span class="glyphicon glyphicon-circle-arrow-right"></span>Offer economic medical travel with best medical outcomes. We provide treatments at prices 60 percent to 80 percent lower than the U.S.A. or the U.K.</li>
					
					<li class="lead gapp"><span class="glyphicon glyphicon-circle-arrow-right"></span>No waiting list</li>
					<li class="lead gapp"><span class="glyphicon glyphicon-circle-arrow-right"></span>Provide the best care possible including translators and dedicated staff throughout your stay</li>
					
					<li class="lead gapp"><span class="glyphicon glyphicon-circle-arrow-right"></span>Provide private rooms, private chefs, translators and dedicated staff</li>

					</ul>
					</p>
                
                
                
                
					
				</div>           
            </div>
        </div>

    </div>

	

	</div>
	
	
	
	<!-- Credits -->
	<div id="whyUs" class="content-section-b">
		<div class=" container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Why pick us?</h2>
				<p class="lead" style="margin-top:0">Because your experience with us will be</p>
			 </div>
			</div>
			 <div class="row text-center">
				<div class="mover col-md-3  center-block wow bounceIn">
					<div class="row">
						<div class=" box-icon rotate"> 
							<i class="fa fa-plane fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Swift </h3>
							
						</div>
				  </div>
			  </div>
			  <div class="mover col-md-3 center-block wow bounceIn">
					<div class="row">
					  <div class=" box-icon rotate"> 
						<i class="fa fa-magic fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Hassle Free </h3>
						 
					  </div>
					</div>
			  </div>
			  
			  
			  <div class="mover col-md-3  center-block wow bounceIn">
					<div class="row">
						<div class=" box-icon rotate"> 
							<i class="fa  fa-money fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Affordable </h3>
						</div>
				  </div>
			  </div>
			  <div class="mover col-md-3 center-block wow bounceIn">
					<div class="row">
					  <div class=" box-icon rotate"> 
						<i class="fa  fa-heart fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> High Quality</h3>
						
					  </div>
					</div>
			  </div>
		  </div>
			 
			  
			  <div class="row">
				<div class="mover2 col-md-4  center-block wow bounceIn">
					<div class="row">
						<div class=" box-icon rotate"> 
							<i class="fa fa-thumbs-up fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> World Class Treatments </h3>
							
						</div>
				  </div>
			  </div>
			  <div class="mover2 col-md-4 center-block wow bounceIn">
					<div class="row">
					  <div class=" box-icon rotate"> 
						<i class="fa fa-picture-o fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> For Medical Tourist </h3>
						 
					  </div>
					</div>
			  </div>
			  
			  
			  <div class="mover2 col-md-4  center-block wow bounceIn">
					<div class="row">
						<div class=" box-icon rotate"> 
							<i class="fa fa-stethoscope fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Facilitated By Qualified Doctors </h3>
						</div>
				  </div>
			  </div>
			  
		  </div>
			  </div>
			   </div>
			  
			  
			  
		  
		  
		  
	<!-- </div> -->
	
	<!-- Banner Download -->
	<div id="work" class="content-section-c">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center white wrap_title">
				<h2>How it works?</h2>
				<p class="lead" style="margin-top:0">Click the button below to know how we can help you<p>
										
							<button type="button" id="work" class=" wow pulse btn-success btn-lg btn"><span>Steps Involved</span></button>
							
				 
			 </div>
			</div>
		</div>
	</div>
	
	<!-- Contact -->
	<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Contact Us</h2>
				<p class="lead" style="margin-top:0"></p>
			</div>
			<?php echo $result; ?>
			<div class="col-md-6 text-center">
				<div class="mockup-content">
						<div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
							<button type="button "><span>Subscribe to our Newsletter</span></button>
							<div class="morph-content">
								<div>
									<div class="content-style-form  ">
										<h2 class="morph-clone">Get In Touch</h2>
										
										
											<form role="form" action="" method="post" >
												
												<div class="form-group">
														<label for="InputName">Your Name</label>
													<div class="input-group">
														<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
														<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
													</div>
												</div>
					
												<div class="form-group">
														<label for="InputEmail">Your Email</label>
													<div class="input-group">
														<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
														<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
													</div>
												</div>
					
												<div class="form-group">
														<label for="InputMessage">Message</label>
													<div class="input-group">
														<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
														<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
													</div>
												</div>

													<input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
												
											</form>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>	
			
			
			<hr class="featurette-divider hidden-lg">
				<div class="col-md-5 col-md-push-1 address">
					<address>
					<h3>Contact Info</h3>
					<p class="lead">
					Hyderabad, Telangana 20301</a><br>
					Phone(1): +91-9885484950<br>
					Phone(2): +91-7013513369<br>					
					Email(1): drirfanahmed28@gmail.com<br>
					Email(2): na.nafisaali@gmail.com</p>
					</address>

					
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- 	modals  -->


	
				<!-- OrthoModal -->
				<div id="orthModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- Ortho Modal content-->
   					 <div class="modal-content">
   					   <div class="modal-header">
    					    <button type="button" class="close" data-dismiss="modal">&times;</button>
   						     <h4 class="modal-title">Treatments</h4>
   						</div>
    				  <div class="modal-body">
        					<ul>
        						<li>Orthopedic and trauma surgery</li>
        						<li> Birmingham and total hip joint replacement</li> 
       							<li> Reconstruction,replacement & arthroscopy (knee, hip, shoulder, hand, foot and ankle) </li>
								<li> Bone trauma and fracture treatment </li>
								<li> Computer navigation and minimally invasive surgery </li> 
								<li> Sports injuries </li>
								<li> Cerbral palsy surgery </li>
								<li> Congenital disorders </li>
								<li> Deformity correction </li>
								<li> Rheumatology & Arthritis Pain </li>
								<li> Spinal Therapy </li>
								<li> Paediatric Orthopardic Surgery </li>
								<li> Scoliosis & Spinal Deformities </li>
								<li> Congenital / Acquired Bone </li>
								<li> Osteoporosis & Bone Health Clinics </li> 
							</ul>
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>
				
				<!-- Cancer Modal -->
				<div id="cancerModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- cancer Modal content-->
   					 <div class="modal-content">
   					   <div class="modal-header">
    					    <button type="button" class="close" data-dismiss="modal">&times;</button>
   						     <h4 class="modal-title">Treatments</h4>
   						</div>
    				  <div class="modal-body">
        					<ul>
        						<li>Cancer Diagnosis 3D MAMMOGRAM – CT Scans</li>
        						<li> Radiation Therapy</li> 
       							<li> Cancer treatment (Breast – Prostate – Kidney and Uterine – Stomach and intestine)</li>
								<li> Surgical Oncology </li>
								<li> Robotic Cancer Surgery </li> 
								<li> Stem cell transplantation </li>
								<li> Catheter ablations </li>
								<li> Angioplasty & Stenting  </li>
								<li> Coronary Artery Bypass Grafting </li>
								<li> Heart Transplant and Pacemakers </li>
								<li> Heart Valve Repair and replacement </li>
								<li> Implantable Defibrillator </li>
								<li> Patent Foramen Ovale Repair </li>
								<li> Ventricular Assist Device </li>
							</ul>
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>
				
				<!-- CARDIOLOGY Modal -->
				<div id="cardioModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- cardio Modal content-->
   					 <div class="modal-content">
   					   <div class="modal-header">
    					    <button type="button" class="close" data-dismiss="modal">&times;</button>
   						     <h4 class="modal-title">Treatments</h4>
   						</div>
    				  <div class="modal-body">
        					<ul>
        						<li> Interventional Cardiology</li>
        						<li> Pediatric Cardiology</li> 
       							<li> Coronary Artery Bypass</li>
								<li> Angiogram </li>
								<li> Electrophysiological </li> 
								<li> Beating Heart Surgery </li>
								<li> Minimally Invasive Coronary Artery Surgery </li>
								<li> ThoracicSurgery  </li>
								<li> Heart Valve Surgery </li>
								<li> Heart Transplants </li>
								<li> Keyhole Angioplasty </li>
								
							</ul>
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>
				
				<!-- General Modal -->
				<div id="genModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- general Modal content-->
   					 <div class="modal-content">
   					   <div class="modal-header">
    					    <button type="button" class="close" data-dismiss="modal">&times;</button>
   						     <h4 class="modal-title">Treatments</h4>
   						</div>
    				  <div class="modal-body">
        					<ul>
        						<li> Umbilical Hernia</li>
        						<li> Inguinal Hernia Repair</li> 
       							<li> Gall Bladder Removal</li>
								
								
							</ul>
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>
				
				<!-- ENT Modal -->
				<div id="entModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- ent Modal content-->
   					 <div class="modal-content">
   					   <div class="modal-header">
    					    <button type="button" class="close" data-dismiss="modal">&times;</button>
   						     <h4 class="modal-title">Treatments</h4>
   						</div>
    				  <div class="modal-body">
        					<ul>
        						<li> Ear infection</li>
        						<li> Hearing disorders</li> 
       							<li> Language disorders</li>
       							<li> Laryngeal cancer</li>
        						<li> Smell and taste disorder</li> 
       							<li> Sinusitis</li>
       							<li> Throat Infection (Throat illness)</li>
        						<li> Tonsillitis</li> 
       							<li> Snoring and sleep disorder</li>
								<li> Speech disorders and voice disorder</li>
        						<li> Vocal cord disorder</li> 
       							<li> Thyroid and parathyroid</li>
								
								
							</ul>
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>
				
				<!-- Cosmo Modal -->
				<div id="cosmoModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- cosmo Modal content-->
   					 <div class="modal-content">
   					   <div class="modal-header">
    					    <button type="button" class="close" data-dismiss="modal">&times;</button>
   						     <h4 class="modal-title">Treatments</h4>
   						</div>
    				  <div class="modal-body">
        					<ul>
        						<li> Breast augumentation and reduction surgeries</li>
        						<li> Calf implants</li> 
       							<li> Cheeks and chin augumentation surgery</li>
								<li> Cosmetic nose surgery </li>
								<li> Ear correction surgery </li> 
								<li> Eye brow and eyelid lift surgery </li>
								<li> Face lift surgery  </li>
								<li> Liposuction surgery  </li>
								<li> Male chest augumentation surgery</li>
								<li> Mommy makeover surgery </li>
								<li> Nipple reduction sugery </li>
								<li> Scar removal surgery </li>
								<li> Thigh lift surgery </li>
								<li> Tummy tuck surgery </li>
								<li>Oral and maxillofacial surgery</li>
							</ul>
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>	
				
				<!-- dent Modal -->
				<div id="dentModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- dent Modal content-->
   					 <div class="modal-content">
   					   <div class="modal-header">
    					    <button type="button" class="close" data-dismiss="modal">&times;</button>
   						    <h4 class="modal-title">Treatments</h4>
   						</div>
    				  <div class="modal-body">
        					<ul>
        						<li> Dental implants, dentures and bridges</li>
        						<li> Dental Radiology</li> 
       							<li> Orthodontics</li>
								<li> Fillings, crowns and veneers </li>
								<li> Gum disease treatment </li> 
								<li> Root canal treatments </li>
								<li> Wisdom teeth removal  </li>
								<li> Dental Lasers Treatments  </li>
								<li> Dental Implants</li>
								<li> Cosmetic dentistry </li>
								<li> Invisalign </li>
								<li> Snoring solutions and mouth guards </li>
								<li> Facial aesthetics </li>
								<li> Teeth straightening </li>
								<li> Smile Makeover</li>
								<li>Teeth whitening</li>
							</ul>
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>
				
				
				<!-- optha Modal -->
				<div id="opthaModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- OPTHALMOLOGY Modal content-->
   					 <div class="modal-content">
   					   <div class="modal-header">
    					    <button type="button" class="close" data-dismiss="modal">&times;</button>
   						     <h4 class="modal-title">Treatments</h4>
   						</div>
    				  <div class="modal-body">
        					<ul>
        						<li> Cataract Surgery</li>
        						<li> LASIK Eye Surgery</li> 
       							<li> Wavefront LASIK Surgery</li>
								<li> Presby LASIK Surgery </li>
								
							</ul>
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>
				
				<!-- urology Modal -->
				<div id="uroModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- urology Modal content-->
   					 <div class="modal-content">
   					   <div class="modal-header">
    					    <button type="button" class="close" data-dismiss="modal">&times;</button>
   						     <h4 class="modal-title">Treatments</h4>
   						</div>
    				  <div class="modal-body">
        					<ul>
        						<li> Urologic Oncology</li>
        						<li> Reconstructive Surgery</li> 
       							<li> Laparoscopy</li>
								<li> Endourology </li>
								<li> Andrology</li>
        						<li> Neuro-urology</li> 
       							<li> Uro-Gynecology</li>
								<li> Pediatric Urology </li>
								
							</ul>
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>
				
				<!-- gas Modal -->
				<div id="gasModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- gas Modal content-->
   					 <div class="modal-content">
   					   <div class="modal-header">
    					    <button type="button" class="close" data-dismiss="modal">&times;</button>
   						     <h4 class="modal-title">Treatments</h4>
   						</div>
    				  <div class="modal-body">
        					<ul>
        						<li> Endoscopic Retrograde Cholangiopancreatography (ERCP)</li>
        						<li> Endoscopic Ultrasonography</li> 
       							<li> Upper GI Endoscopy</li>
								<li> Enteroscopy and Colonoscopy </li>
								<li> Capsule Endoscopy</li>
        						<li> Manometry</li> 
       							<li> Laparoscopic surgery</li>
								<li> Hernia Surgery </li>
								<li> Gastric and Oesophageal Surgery </li>
								<li> Small Intestine and Colorectal Surgery</li>
								<li> Hepatology </li>
								<li> Liver Transplants </li>
								<li> Pancreatic Transplantation </li>								
							</ul>
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>
				
				<!-- neuro Modal -->
				<div id="neuModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- neuro Modal content-->
   					 <div class="modal-content">
   					   <div class="modal-header">
    					    <button type="button" class="close" data-dismiss="modal">&times;</button>
   						     <h4 class="modal-title">Treatments</h4>
   						</div>
    				  <div class="modal-body">
        					<ul>
        						<li> Spinal Fusion Surgery</li>
        						<li> Minimal Access Spine Surgery</li> 
       							<li> Lumbar Dynamic Stabilization</li>
								<li> Epilepsy Treatment </li>
								<li> Brain & Spine Surgery</li>
        						<li> Spinal Cord Tumors Surgery</li> 
       							<li> Neuro Navigation</li>
								<li> Stroke Prevention and Surgery </li>
								<li> Skull Base Surgery </li>
								<li> Functional Neurosurgery</li>
								<li> Pediatric Neurosurgery </li>
								<li> Vertebroplasty </li>
								<li> Stereotactic Radiosurgery </li>
								<li> Stereotactic Biopsy </li>
								<li> Neuro-Radiology Services </li>
								<li> Robotic Neurorehabilitation </li>								
							</ul>
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>
				
				<!-- More Info -->
				<div id="moreModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- neuro Modal content-->
   					 <div class="modal-content">
   					  
    				  <div class="modal-body">
        					<p>In fact, most of our
partners have spent the last decade preparing for the explosive growth of
medical outsourcing and follow meticulous standards of care and patient
safety as recommended by Joint Commission International (JCI) and
National Accreditation Board for Hospitals & Healthcare (NABH).


We provide online consultation service and register your
query with an internal panel of doctors. Based on your
needs, they recommend you to hospitals that are best for
your needs and help you choose treatments that are
most cost effective. We bring you quotations from
hospitals and help you understand the details such as
the nature of treatment, duration, facilities and costs
involved. We then arrange a direct communication
between you and the consultant for further satisfaction
via email or telephone. The consultant will communicate
with you on a one-to-one basis and explain you the
course of action. On your satisfaction, you can select the
hospital and pre-book your appointment with us.


We will assist you throughout your journey to India. We will assist you with
pre-booking dates with the hospitals, arrival and departure services
including tickets and entry clearance procedures, foreign exchange,
Roaming SIM cards, taxi service, car hire, food, accommodation and any
other needs that you and your family wishes while you stay in India. If you
have any special needs, you can always discuss with us. While healthcare
services are your primary goal to visit India, we want you to experience the
rich cultural heritage and the unique diversity offered by the country.


India is a popular destination for tourists who travel from around the world
and are a testimony to the exquisite treasures in the country. In order to
serve you the best and make your stay memorable, we have travel
packages that include historic buildings, heritage icons, religious places,
natural discoveries, leisure attractions, concerts, festivals, movies, shopping
and much more. We aim to respect your privacy, dignity and religious and
cultural beliefs at all times. We look forward to hear from you soon.



<br/><em>It doesn’t take an instant more, or cost a penny more, to be empathetic than
it does to be indifferent. (Brian Lee)</em></p>
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>
				
				<!-- More Info -->
				<div id="workModal" class="modal fade" role="dialog">
  					<div class="modal-dialog">

   					 <!-- neuro Modal content-->
   					 <div class="modal-content">
   					   
    				  <div class="modal-body">
        					<p class="textcenter" id="workhead"><strong>3 Simple Steps</strong></p>
        					<ul>
        					<li><em>Step 1:</em>A panel of our board's expert doctors, recognised by the Medical Council of India, are here for YOU from your first call to attend to you, based on the requirements you post. Doctor associated with that concerned department will be connected via phone with you during the entire process of consultation and beyond.</li><br />
							<li><em>Step 2:</em>We specialise in recruiting the best of physicians, surgeons, dentist, orthodontists, surgeons, gynaecologists, paediatrics, cosmetologists, dermatologists, ophthalmologists et al to be there since the moment you approach us. </li><br />

							<li><em>Step 3:</em> After our consultation, our doctors/team guides you so that together we zero down on the best practice/hospital to be hired for your treatment, post-treatment care and dispersion of various services.</li>
							</ul>
							<p class="textcenter"><strong>Thats it !</strong></p> <p>We believe in treating our clientele with a personal touch that aims at providing home-like comfort with the utmost care and concern; keeping the provision of affordable high quality treatment as our primary aim throughout the process.</p>
        					
        					        					
      					</div>
      					<div class="modal-footer">
       						 <button type="button" class="btn btn-danger textcenter" data-dismiss="modal">Close</button>
      					</div>
   					 </div>
 					</div>
				</div>
				
				
<!-- done modals -->
	
	
	
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            
              <ul>
                <li>Copyright © 2017</li>
                <li>Koirn Med Advisors PVT LTD</li>
                <li>All Rights Reserved</li>
              </ul>
             
            
	   
          </div> <!-- /col-xs-7 -->

         
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/script.js"></script>
	<!-- StikyMenu -->
	<script src="js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	
	
	
	<script>
	$("#work").click(function() {
                $("#workModal").modal("show");
          
      });
	 $("#moreinfo").click(function() {
                $("#moreModal").modal("show");
          
      });
      $("#orth").click(function() {
                $("#orthModal").modal("show");
          
      });
      
       $("#cardio").click(function() {
                $("#cardioModal").modal("show");
          
      });
      
       $("#cancer").click(function() {
                $("#cancerModal").modal("show");
          
      });
      
       $("#gen").click(function() {
                $("#genModal").modal("show");
          
      });
      
       $("#ent").click(function() {
                $("#entModal").modal("show");
          
      });
       $("#cosmo").click(function() {
                $("#cosmoModal").modal("show");
          
      });
    
		$("#dent").click(function() {
                $("#dentModal").modal("show");
          
      });
       $("#optha").click(function() {
                $("#opthaModal").modal("show");
          
      });
       $("#uro").click(function() {
                $("#uroModal").modal("show");
          
      });
        $("#gas").click(function() {
                $("#gasModal").modal("show");
          
      });
       $("#neu").click(function() {
                $("#neuModal").modal("show");
          
      });
       
      </script>
	<!-- Smoothscroll -->
	

	<script type="text/javascript" src="js/jquery.corner.js"></script> 
	<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="js/classie.js"></script>
	<script src="js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script> 
</body>

</html>
