<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">

	<title>ABOC</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
		<a class="navbar-brand" href="#landing">ABOC</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#aboutUs">About us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#skills">Skills</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#team">Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#projects">Projects</a>
				</li>
			</ul>
		</div>
	</nav>

	<section id="landing" class="jumbotron jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center hidden">
            <img class="textIntro" src="images/textIntro1.PNG" alt="ABOC Computer Science and IT engineers The best offers and price!">
            <div class="socialLinks">    
                <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-instagram"></i></a>
                <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-facebook-square"></i></a>
                <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
            </div>
            <div>
                <a href="#aboutUs" class="btn btn-lg enterBtn"><i class="fa fa-caret-down"></i></a>
            </div>
        </div>
    </section>

    <article id="aboutUs">
    	<div class="container">
            <h2>About us: </h2>
            <!--<div>
                We are a professional team, working around the world since 2014. Our motive is that every customer is 100% satisfied with our work without adding additional costs.

                Hard working, delivery project on time and acceptable price are our advantages.

                We offer -> Creating a professional website, mobile applications (Android and iOS), data entry, software programs, and making/editing videos.

                --- 4+ years of experience
                --- Best prices with 100% satisfaction
                --- Work 6 days a week - if necessary 7 days
                --- We are available for work 24/7 every day
            </div> -->  
            <?php
            require 'connection.php';

            $sql = "SELECT * FROM aboutUs";
            $result = $dbc->query($sql);
            $count = $result->num_rows;
            if ($count > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div>' . $row["description"] . '</div>';
                }
            }
            ?>
        </div>
    </article>

    <article id="skills">
    	<div class="container">
            <h2>Our skills:</h2>
            <div class="row">
                <div class="col-12 skillCardWrap skillWeb">
                    <h3 class="skillHead">Web Development</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                               <h6 class="skillSubHead">Frontend</h6>
                            <?php
                            $sql = "SELECT * FROM skills where type = 'Front-end' ";
                            $result = $dbc->query($sql);
                            $count = $result->num_rows;
                            if ($count > 0) {
                                echo '<ul>';
                                while ($row = $result->fetch_assoc()) {
                                    echo '<li>' . $row["programs"] . '</li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                                <!-- <h6 class="skillSubHead">Frontend</h6>
                                <ul>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>SASS</li>       
                                    <li>BOOTSTRAP</li>
                                    <li>JAVASCRIPT</li>
                                    <li>JQUERY</li>
                                    <li>ANGULAR</li>
                                    <li>WORDPRESS</li>  
                                </ul> -->
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="skillSubHead">Backend</h6>
                                <?php
                                $sql = "SELECT * FROM skills where type = 'Back-end' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                    echo '<ul>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li>' . $row["programs"] . '</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                                <!-- <ul>
                                    <li>PHP</li>
                                    <li>NODE.JS</li>
                                    <li>JAVASCRIPT</li>     
                                    <li>JQUERY</li>
                                    <li>ANGULAR</li>
                                    <li>MYSQL</li>
                                    <li>SQL</li>
                                    <li>MongoDB</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 skillCardWrap skillMobile">
                    <h3 class="skillHead">Mobile Application Development</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <h6 class="skillSubHead">Android</h6>
                                <?php
                                $sql = "SELECT * FROM skills where type = 'Android-app' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                    echo '<ul>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li>' . $row["programs"] . '</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                                <!-- <ul>
                                    <li>Android Studio</li>
                                    <li>JAVA</li> 
                                </ul> -->
                            </div>
                            <div class="col-12 col-md-4">
                                <h6 class="skillSubHead">iOS</h6>
                                <?php
                                $sql = "SELECT * FROM skills where type = 'IOS' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                    echo '<ul>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li>' . $row["programs"] . '</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                                <!-- <ul>
                                    <li>SWIFT</li>
                                </ul> -->
                            </div>
                            <div class="col-12 col-md-4">
                                <h6 class="skillSubHead">Hybrid Crossplatform Apps</h6>
                                <?php
                                $sql = "SELECT * FROM skills where type = 'Hybrid Crossplatform Apps' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                    echo '<ul>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li>' . $row["programs"] . '</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                               <!--  <ul>
                                    <li>Adobe PhoneGap framework</li>
                                    <li>Apache Cordova framework</li>
                                    <li>Electron framework</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 skillCardWrap skillDesk">
                    <h3 class="skillHead">Software Development</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="skillSubHead"></h6>
                                <?php
                                $sql = "SELECT * FROM skills where type = 'Software programming' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                    echo '<ul>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li>' . $row["programs"] . '</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                                <!-- <ul>
                                    <li>C</li>
                                    <li>C++</li>
                                    <li>Qt Framework</li>    
                                    <li>C#</li>
                                    <li>PYTHON</li>
                                    <li>JAVA</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 skillCardWrap skillVideo">
                    <h3 class="skillHead">Video Editing</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="skillSubHead"></h6>
                                <?php
                                $sql = "SELECT * FROM skills where type = 'Video making and editing' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                    echo '<ul>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li>' . $row["programs"] . '</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                                <!-- <ul>
                                    <li>ADOBE AFTER EFFECT</li>
                                    <li>ADOBE PREMIERE PRO</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 skillCardWrap skillData">
                    <h3 class="skillHead">Data Entry</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="skillSubHead"></h6>
                                 <?php
                                $sql = "SELECT * FROM skills where type = 'Data entry' ";
                                $result = $dbc->query($sql);
                                $count = $result->num_rows;
                                if ($count > 0) {
                                    echo '<ul>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li>' . $row["programs"] . '</li>';
                                    }
                                    echo '</ul>';
                                }
                                ?>
                                <!-- <ul>
                                    <li>EXCEL</li>
                                    <li>MYSQL</li>
                                    <li>SQL</li>
                                    <li>MongoDB</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>


    <article id="team">
        <div class="container">
        <div class="row">
            <h2>Our team</h2>   
        </div>
        <div class="row">
              <?php
                //require 'connection.php';

                $sql = "SELECT * FROM team";
                $result = $dbc->query($sql);
                $count = $result->num_rows;
                if ($count > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="teamMember col-6 col-lg-3 col-md-6">
                <img src="images/abu.png" alt="abu" width="100%">
                <h4>' . $row["name"] . '</h4>
                <div class="memberSocialLinks">
                    <a href=" ' . $row["github"] . ' " target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                    <a href=" ' . $row["linkedin"] . '" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
                </div>
                <p class="memberIntro">' . $row["position"] . '<br><a href="' . $row["educationLink"] . '"> ' . $row["education"] . '</a></p>
            </div>';
                    }
                }
                ?>
           <!-- <div class="teamMember col-6 col-lg-3 col-md-6">
                <img src="images/abu.png" alt="abu" width="100%">
                <h4>abu</h4>
                <div class="memberSocialLinks">
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
                </div>
                <p class="memberIntro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="teamMember col-6 col-lg-3 col-md-6">
                <img src="images/oma.jpg" alt="omco" width="100%">
                <h4>omco</h4>
                <div class="memberSocialLinks">
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
                </div>
                <p class="memberIntro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="teamMember col-6 col-lg-3 col-md-6">
                <img src="images/bake.jpg" alt="bake" width="100%">
                <h4>bake</h4>
                <div class="memberSocialLinks">
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
                </div>
                <p class="memberIntro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="teamMember col-6 col-lg-3 col-md-6">
                <img src="images/combe.jpg" alt="combe" width="100%">
                <h4>combe</h4>
                <div class="memberSocialLinks">
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
                </div>
                <p class="memberIntro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>  -->
        </div>
        </div>
    </article>
   
    <article id="projects">
        <div class="container">
            
            <div class="row">
                <h2>Projects:</h2>
            </div>

            <div class="container">
                <div class="row">

                <?php
                //require 'connection.php';
                $sql = "SELECT * FROM projects";
                $result = $dbc->query($sql);
                $count = $result->num_rows;
                if ($count > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="projectWrap col-12 col-md-6">
                        <div class="container">
                            <h3 class="projectHead">' . $row["name"] . '</h3>
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="projectSubHead">' . $row["description"] . '</h6>
                                    <img src="images/landing.jpg" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                }
                ?>


                    <!--  
                    <div class="projectWrap col-12 col-md-6">
                        <div class="container">
                            <h3 class="projectHead">Our homepage</h3>
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="projectSubHead">Created for our promotional porpuses</h6>
                                    <img src="images/landing.jpg" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="projectWrap col-12 col-md-6">
                        <div class="container">
                            <h3 class="projectHead">Klix News portal</h3>
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="projectSubHead">Created for porpuses of hate speech and comment fights among the people of Bosnia and Herzegovina</h6>
                                    <img src="https://s3.amazonaws.com/woothumbs/klix.ba.png" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="projectWrap col-12 col-md-6">
                        <div class="container">
                            <h3 class="projectHead">IUS webpage</h3>
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="projectSubHead">place where students CAN'T accomplish anything related to their study needs</h6>
                                    <img src="https://docs.microsoft.com/en-us/aspnet/web-forms/overview/older-versions-getting-started/deploying-web-site-projects/displaying-a-custom-error-page-vb/_static/image1.png" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>-->

                </div>
            </div>
        </div>
    </article>

    <footer>
    	<!--Contact list + mapa / popup + linkovi + copyright-->
    	<div class="container">
    		<div class="row">
    			<div class="col">
    				<h3 >Building your dreams in software...</h3>
    			</div>
    			<div class="col">
    				<h2 class="mb-5 text-uppercase">Contact info</h2>
                    
                    <ul class="list-group list-group-flush text-warning" style=" border:none; background-color: black">
                        <li class="list-group-item  mt-4" style="background-color: black">
                        <div class="row">
                            <span class="col-3">
                                <i class="fa fa-map-marker mr-2"></i>Address:
                            </span>
                            <span id="footerAddress" class="col-8 offset-1">
                                <a href="#" id="map" data-toggle="modal" data-target="#mapModal" style="text-decoration:none;" class="text-white">Grada Bakua 11, Sarajevo, B&H</a>
                            </span>
                            </div>
                        </li>
                        <li class="list-group-item" style="background-color: black">
                            <div class="row">
                                <span class="col-3">
                                    <i class="fa fa-envelope mr-2"></i>E-mail:
                                </span>
                                <span  id="footerEmail" class="col-8 ml-3">
                                    <a href="mailto:omar1537@gmail.com" style="text-decoration:none;" class="text-white">
                                        omar1537@gmail.com</a>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item" style="background-color: black">
                        <div class="row">
                                <span class="col-4 mt-2">
                                    <i class="fa fa-share-alt mr-2"></i>Social media: 
                                </span>
                                <span class="col-8">
                                    <a href="https://www.instagram.com/bosniant/" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.facebook.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-facebook-square"></i></a>
                                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-github"></i></a>
                                    <a href="https://www.github.com" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-linkedin"></i></a>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item" style="background-color: black"></li>
                    </ul>

    				<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    						<div class="modal-content">
    							<div class="modal-header">
    								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    									<span aria-hidden="true">&times;</span>
    								</button>
    							</div>
    							<div class="modal-body">
    								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.2453302725744!2d18.349382815303517!3d43.830010879115655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c990fdf0ccc5%3A0xdab20818f84ffaf7!2sGrada+Bakua%2C+Sarajevo+71000!5e0!3m2!1sen!2sba!4v1520858418062"
    									width="750" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    							</div>
    						</div>
    					</div>
    				</div>
    					
    				

    			</div>
    		</div>			
    	</div>
    </footer>
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/masonary.js"></script>
</body>
</html>