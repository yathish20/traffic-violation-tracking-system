<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Homepage</title>
    <link rel="icon" href="./img/policelogo.jpg" type="image/png">
    <link rel="shortcut icon" href="./img/policelogo.jpg" type="img/x-icon">

    

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>

    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .traffic-rule-description {
            display: none;
        }

        .traffic-rule-description.active {
            display: block;
        }
    </style>
</head>

<body>
<header class="header" id="header">
    <!--header-start-->
    <div class="container">
        <figure class="logo animated fadeInDown delay-07s">
            <a href="#"><img src= "./img/policelogo.jpg" alt=""  ></a>
        </figure><h><b>BANGALORE  POLICE</b></h>
        <h1 class="animated fadeInDown delay-07s">WELCOME TO BANGALORE TRAFFIC CONTROL</h1>
        <ul class="we-create animated fadeInUp delay-1s">
            <li>A LITTLE CARE MAKES <b>ACCIDENTS RARE</b></li>
        </ul>
        <a class="link animated fadeInUp delay-1s servicelink" href="login/login.php">LOGIN NOW</a>
    </div>
</header>
<!--header-end-->

<nav class="main-nav-outer" id="test">
    <!--main-nav-start-->
    <div class="container">
        <ul class="main-nav">
            <li><a href="#header">Home</a></li>
            <li><a href="login/login.php">Login Now</a></li>
            <li class="dropdown">
                <a href="#Traffic" class="dropbtn">Traffic Rules</a>
            </li>
            <li class="small-logo"><a href="#header"><img src="./img/policelogo.jpg" height="70" width="70" alt=""></a></li>
            <li><a href="#client">COFOUNDER</a></li>
            <li><a href="#team">Help Desk</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>
<!--main-nav-end-->

<section class="main-section alabaster" id="Traffic">
    <!--main-section alabaster-start-->
    <div class="container">
        <div class="row">
            <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                <img src="./img/policelogo.jpg" alt="">
            </figure>
            <div class="col-lg-7 col-sm-8 featured-work" id="Rules">
                <h2 id="traffic-rule-1" class="show-rule">Traffic signs that provide information</h2>
                <p class="traffic-rule-description" id="traffic-rule-1-description">The distance left to cover to reach a specific destination.<br>
                            Alternative routes to the specific destination, if any.<br>
                            Locations on the cautionary traffic signs are also displayed such as schools, colleges, workplaces, clubs, public places and restaurants.  </p>
                <h2 id="traffic-rule-2" class="show-rule">Functions of traffic signs</h2>
                <p class="traffic-rule-description" id="traffic-rule-2-description">Knowledge of traffic signs for any driver is necessary as they perform certain functions which are essential for road safety.<br> The functions performed by traffic signs are:<br>
                    The distance left to cover to reach a specific destination.<br>
                    Alternative routes to the specific destination, if any.<br>
                    Locations on the cautionary traffic signs are also displayed such as schools, colleges, workplaces, clubs, public places and restaurants.
                    <br></p>

                <h2 id="traffic-rule-3" class="show-rule">Do not Drive without these Documents</h2>
                <p class="traffic-rule-description" id="traffic-rule-3-description">     Valid driving license<br>
                            Vehicle registration certificate ( Form 23)<br>
                            Valid vehicle's insurance certificate<br>
                            Permit and vehicle's certificate of fitness (applicable only to transport vehicles)<br>
                            Valid Pollution Under Control Certificate On demand by a police officer in uniform or an officer of the Transport Department, produce these documents for inspection</p>

                <!-- Add more rules and descriptions as needed -->
            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const showRuleHeadings = document.querySelectorAll('.show-rule');
        showRuleHeadings.forEach(function(heading) {
            heading.addEventListener('click', function(event) {
                const ruleDescription = heading.nextElementSibling;
                // Toggle the 'active' class to show or hide the description
                ruleDescription.classList.toggle('active');
            });
        });
    });
</script>

<!--main-section alabaster-end-->
<section class="main-section client-part" id="client">
    <!--main-section client-part-start-->
    <div class="container">
        <b class="quote-right wow fadeInDown delay-03"><i class="fa fa-quote-right"></i></b>
        <div class="row">
            <div class="col-lg-12">
                <h4 style="font-style: italic; color: white;" id="ourname"> HI WE ARE DHANUSH M & ESHWAR K . MAKER OF THIS TRAFFIC VIOLATION  TRACKING  SYSTEM  WEBSITE. THIS IS A MINI PROJECT OF DBMS</h4>
            </div>
        </div>
        <ul class="client wow fadeIn delay-05s">
            <li><a href="#">
                <img src="img/person1.jpg" height="130" width="135" alt="">
                <h3>Dhanush M</h3>
            </a></li>
            <li><a href="#">
                <img src="img/person2.jpg" height="130" width="135" alt="">
                <h3>Eshwar K</h3>
            </a></li>
        </ul>
    </div>
</section>


<style>
	#ourname {
		text-align: center;
		font-family:Verdana, Geneva, Tahoma, sans-serif;
		font-size: 20px;
		text-shadow: 1px 1px 2px pink;
		/* background-color: lightgreen; */
	}

	#traffic-rule-1, #traffic-rule-2, #traffic-rule-3{
		cursor: pointer;
		font-family:serif;
		font-size: 30px;
		text-transform: uppercase;
		text-shadow: 1px 1px 2px  #ddffcc;
	}		
	
	#Rules {
		font-family:Georgia;
		font-size: 20px;
		font-weight: bold;	
	}

	

	.heading {
		text-align: center;
		margin-bottom: 2px;
		font-weight: bold;
		font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
		font-size: 55px;
	}
	
	.bellowline {
		text-align: center;
		margin-bottom: 100%;
		font-family:Verdana, Geneva, Tahoma, sans-serif;	
		font-size: 20px;
	}
	#saini {
		text-align: center;
		font-family:cursive;
		font-size: 35px;
	}
	#sainiid {
		text-align: center;
		font-family:Verdana, Geneva, Tahoma, sans-serif;
		font-size: 20px;
	}
	#Love_Babbar {
		text-align: center;
		font-family:cursive;
		font-size: 35px;
	}
	#Love_Babbarid {
		text-align: center;
		font-family:Verdana, Geneva, Tahoma, sans-serif;
		font-size: 20px;
	}
	#Harry {
		text-align: center;
		font-family:cursive;
		font-size: 35px;
	}
	#Harryid {
		text-align: center;
		font-family:Verdana, Geneva, Tahoma, sans-serif;
		font-size: 20px;
	}
</style>


<section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
			<h2 class="heading">For Public Support</h2>
			<h6 class="bellowline">CAN CONTECT ANY TIME WHEN U NEED HELP</h6>
			<div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/saini.jpg" alt="">
					</div>
					<h3 class="wow fadeInDown delay-03s", id="saini">Akshay Saini</h3>
					<span class="wow fadeInDown delay-03s" id="sainiid">Superientendent of Police</span>
				</div>
				<div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/babbar.jpg" width="300" height="300	" alt="">
					</div>
					<h3 class="wow fadeInDown delay-06s"  id="Love_Babbar">Love Babbar </h3>
					<span class="wow fadeInDown delay-06s" id="Love_Babbarid">Director General of Police</span>
				</div>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-09s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/harry.jpg" width="300" height="300" alt="">
					</div>
					<h3 class="wow fadeInDown delay-09s" id="Harry">Harry </h3>
					<span class="wow fadeInDown delay-09s" id="Harryid">Assistant Commissioner of Police</span>
				</div>
			</div>
		</div>
	</section>
	<!--main-section team-end-->



	<section class="business-talking">
		<!--business-talking-start-->
		<div class="container">
			<h2>Don't Drink And Drive</h2>
		</div>
	</section>
	<!--business-talking-end-->
	<div class="container">
    <section class="main-section contact" id="contact">
        <div class="row">
            <div class="col-lg-12 contact-container wow fadeInLeft">
                <div class="contact-info">
                    <div class="contact-info-box address clearfix">
                        <h3><i class="icon-map-marker"></i><strong>Address:</strong></h3>
                        <span>Subramanyapura Police Station, Bangalore</span>
                        <span>Hulimavu Traffic Police Station, Bangalore</span>
                    </div>
                    <div class="contact-info-box phone clearfix">
                        <h3><i class="fa fa-phone"></i><strong>Phone:</strong></h3>
                        <span>1234567890</span>
                        <span>0987654321</span>
                    </div>
                    <div class="contact-info-box email clearfix">
                        <h3><i class="fa fa-envelope"></i><strong>Email:</strong></h3>
                        <span>dhnaushmadhusudan31@gmail.com</span>
                        <span>eshwarappu@gmail.com</span>
                    </div>
                    <div class="contact-info-box hours clearfix">
                        <h3><i class="fa fa-clock-o"></i><strong>Hours:</strong></h3>
                        <span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                    </div>
                </div>
				<div class="socialLink">
					<a href="https://www.google.com/search?client=firefox-b-d&q=twitter" id="twitter" target="_blank"><i class="fab fa-twitter fa-2x" style="color: #55acee;"></i></a>
					<a href="https://www.facebook.com/" id="facebook" target="_blank"><i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i></a>
					<a href="https://www.instagram.com/" id="instagram" target="_blank"><i class="fab fa-instagram fa-2x" style="color: #ac2bac;"></i></a>
					<a href="https://www.google.com/search?client=firefox-b-d&q=google.com" id="gooogle" target="_blank"><i class="fab fa-google fa-2x" style="color: #dd4b39;"></i></a>
					<a href="https://web.whatsapp.com/" id="whatsapp" target="_blank"><i class="fab fa-whatsapp fa-2x" style="color: #25d366;"></i></a>
				</div>

            </div>
        </div>	
    </section>
</div>


		
	<style>
		
		 .contact-container {
            margin-top: 10px; /* Adjust as needed */
            background-color: #e6e6e6;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 10px 7px 5px black;
            padding: 20px;
            text-align: left; /* Align text to the left */
        }

        /* Styling the contact information */
        .contact-info h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .contact-info span {
            font-size: 16px;
            margin-bottom: 5px;
            display: block; /* Display spans in block format */
        }

        /* Styling for socialLink container */
        .socialLink {
            margin-top: 40px; /* Adjust margin as needed */
			margin-left: 60px;
			
        }

        .socialLink a {
			margin-inline: 1%;
            margin-right: 10px; /* Add some spacing between icons */
            color: #333; /* Default color */
            font-size: 20px; /* Adjust the font size as needed */
            text-decoration: none; /* Remove default underline */
        }

		#twitter:hover {
            color: #007bff; /* Change color on hover */
        }

		#facebook:hover {
			color: 	  #3396ff; /* Change color on hover */
		}
		
		#instagram:hover {
			color:  orange; /* Change color on hover */
		}

		#gooogle:hover {
			color:  red; /* Change color on hover */
		}

		#whatsapp:hover {
			color:  green; /* Change color on hover */
		}

	</style>

	<script type="text/javascript">
		$(document).ready(function(e) {

			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>


</body>
</html>