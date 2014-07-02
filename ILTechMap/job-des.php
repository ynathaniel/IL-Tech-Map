<?php
session_start();
include 'manager.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ILTechMap Job Seekers</title>
	   
     <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->  
     
    <!-- Bootstrap core CSS -->
    <link href="css/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS for the 'Business Frontpage' Template -->
    <link href="css/css/business-frontpage.css" rel="stylesheet">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <link rel="stylesheet" href="css/cssmenu/menu_source/styles.css">
    <link href="css/hover.css" rel="stylesheet" media="all">

    
    
</head>

<body>

   <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="color: #fff; margin-left: 0px" class="navbar-brand menu-active disableClick" href="http://www.iltechmap.com"><strong>ILTechMap</strong></a>
            </div>

				
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                	<li style="margin-left: 6px">
                    	<a href="http://www.iltechmap.com/">Home</a>
                    </li>
                    <li style="margin-left: 6px">
                    	<a href="http://www.iltechmap.com/about">About Us</a>
                    </li>
                    <li class="menu-active" style="margin-left: 6px">
                    	<a href="http://www.iltechmap.com/job-des">Job Seekers</a>
                    </li>
                    <li style="margin-left: 6px">
                    	<a href="http://www.iltechmap.com/emp-des">Companies</a>
                    </li>
                    <li style="margin-left: 6px">
                    	<a href="http://www.iltechmap.com/ser-des">Service Providers</a>
                    </li>
                    <li style="margin-left: 6px">
                    	<a href="http://www.iltechmap.com/hotjobs">Hot Jobs</a>
                    </li>
                    <li style="margin-left: 6px">
                    	<a href="http://www.iltechmap.com/contact">Contact Us</a>
                    </li>
                    <?php
					if ($_SESSION['status'] == true)
					{
						echo '<li style="margin-left: 6px">
                    		<a href="http://www.iltechmap.com/logout">Log Out</a>
                    	</li>';
					}
					else
					{
                    	echo '<li style="margin-left: 6px">
                    	<a href="http://www.iltechmap.com/login">Log In</a>
                    	</li>';
						echo '<li style="margin-left: 6px">
                    		<a href="http://www.iltechmap.com/add-cand">Join</a>
                    	</li>';
					}
					?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
       </div>
        <!-- /.container -->
    </nav>
    <!--
	<div id='cssmenu'>
    	<div class="container">
 		<div class="menu-back">
            <ul>
            	<li class='active'><a><span><strong>ILTechMap</strong></span></a></li>
                <li><a href='www.iltechmap.com/home'><span>Home</span></a></li>
                <li><a href='www.iltechmap.com/login'><span>Log In</span></a></li>
                <li><a href='www.iltechmap.com/signup'><span>Register</span></a></li>
                <li class='last active'><a href='www.iltechmap.com/contact'><span>Contact</span></a></li>
            </ul>
        </div>
    	</div>
    </div>

-->

	
    
    
    </div>


    <div class="business-header-2 gradient">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- The background image is set in the custom CSS -->
                    
                    <h1 class="tagline tagline-aid">Job Seekers</h1>
                    

                </div>
            </div>

        </div>

    </div>

	<div class="width">
    <div class="container">
    	<hr>
       	<div class="row">
        <div class="col-lg-8 col-sm-8">
        <div id="touch" style="height: 600px">
        	<h1><strong>Why the Israeli Technology Map:</strong><h1>
            <div style="height: 73px; margin:25px 140px 70px 0p; font-size: 22px">
            Are you interested in working in the most innovative companies in the world? Do you want to be part of growing technology companies? Do you have the skills and experience to work in one of those companies? This is your chance! All you have to do is follow the next three steps and you’re half way there:
            </div>
            <div style="margin-top: 30px">
                <div class="des-box-text grow">
                <h5 style="margin: 16% 0px 0px 0px">Upload your profile<br>to the database</h5>
                </div>
                <div class="des-box-text grow">
                <h5 style="margin: 10% 0px 0px 0px">Locate potential employers in your area</h5>
                </div>
                <div class="des-box-text grow">
                <h5 style="margin: 10% 0px 0px 0px">Identify relevant opportunities with each company</h5>
                </div>
                <div style="float:clear"></div>
            </div>
            <br>
            
            <div style="height: 43px; margin:0px 140px 70px 20px; font-size: 22px">
            So what are you waiting for?
            </div>
            
            
        	<form class="pure-form pure-form-stacked">
            	<fieldset>
                <ul style="margin-top: 30px; margin-bottom: 15px">
                    <li class="buttonBig wobble-skew" style="margin-left: 152px"><input name="b" style="padding: 30px 30px 30px 30px; font-size: 25px" type="submit" class="pure-button pure-button-primary" value="Hot Jobs" onclick="window.location.href= 'http://www.iltechmap.com/hotjobs'" /></li>
                    <?php
					if ($_SESSION['status'] == false)
					{
                    	$ber = '<li class="buttonBig wobble-skew"><input name="b" style="padding: 30px 30px 30px 30px; font-size: 25px; margin-left: 25px" type="submit" class="pure-button pure-button-primary" value="Create Your Profile" onclick="window.location.href= \'http://www.iltechmap.com/add-cand\'"></li>';
						$bur = '<li class="buttonBig wobble-skew"><input name="b" style="padding: 30px 30px 30px 30px; font-size: 25px; margin-left: 20px" type="submit" class="pure-button pure-button-primary" value="Sign In" onclick="window.location.href= \'http://www.iltechmap.com/login\'"></li>';
						echo stripslashes($bur);
						echo stripslashes($ber);
					}
					?>
						
               </ul>
               </fieldset>
            </form>
        </div>
        </div>
    	</div>
    <hr>
	<div class="container">
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Israeli Technology Map 2014</p>
                </div>
            </div>
        </footer>

    </div>
    </div>
    <!-- /container -->


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script>
		$('#cssmenu').prepend('<div id="bg-one"></div><div id="bg-two"></div><div id="bg-three"></div><div id="bg-four"></div>');
		
		function getParameterByName( name,href )
		{
		  	name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
		  	var regexS = "[\\?&]"+name+"=([^&#]*)";
		  	var regex = new RegExp( regexS );
		  	var results = regex.exec( href );
		  	if( results == null )
				return "";
		  	else
				return decodeURIComponent(results[1].replace(/\+/g, " "));
		}
		
		window.onload = function() {			
			var url = window.location.href;
			var param = getParameterByName('b', url);
			if (param == 'Candidates') {
				window.location = "http://www.iltechmap.com/cand";
			};
			if (param == 'Sign In') {
				window.location = 'http://www.iltechmap.com/login';
			};
			if (param == 'Create Your Profile') {
				window.location.href= 'http://www.iltechmap.com/add-cand';
			}
		};
		
    </script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
