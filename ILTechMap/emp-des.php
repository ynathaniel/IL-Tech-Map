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

    <title>ILTechMap Companies</title>
	   
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
                    <li style="margin-left: 6px">
                    	<a href="http://www.iltechmap.com/job-des">Job Seekers</a>
                    </li>
                    <li class="menu-active" style="margin-left: 6px">
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
                    
                    <h1 class="tagline tagline-aid">Companies</h1>
                    

                </div>
            </div>

        </div>

    </div>

	<div class="width">

    <div class="container">
    	<hr>
       	<div class="row">
        <div class="col-lg-8 col-sm-8">
        <div id="touch" style="height: 750px">
        	<h1><strong>Why the Israeli Technology Map:</strong><h1>
            <div style="height: 73px; margin:25px 140px 70px 60px; font-size: 22px">
            Many job seekers are interested in your open positions, but in order to find the right candidates, you need the right tools. The resumes are out there but you have traditionally relied on third parties to do the first selection by using keywords. <br><br>When you post a job on the <em><strong>Israeli Technology Map</strong></em>, applicants fill a form answering each and every one of the job requirements, so you are immediately able to view relevant profiles without having to open and review each resume.<br><br>Our matching engine goes beyond keywords and lets you see candidates’ skills, qualifications and experience levels by matching them to your requirements.
            </div>
            <div style="margin-top: 202px">
                <div class="des-box-text grow">
                <h5>Post Your Open Positions</h5>
                </div>
                <div class="des-box-text grow">
                <h5>Search for Relevant Candidates</h5>
                </div>
                <div class="des-box-text grow">
                <h5>Receive Only Qualified Resumes</h5>
                </div>
            </div>
            <br>
            
            <div style="height: 43px; margin-left: 50px;">
            <p style="padding:0px 0px 70px 8px; font-size: 22px">For an easier and more efficient candidate search, use the “<em><strong>Israeli Technology Map</strong></em>".</p>
            </div>
            
            
        	<form class="pure-form pure-form-stacked">
            	<fieldset>
                <ul style="margin-top: 30px; margin-bottom: 15px">
                    <li class="buttonBig wobble-skew" id='goMap'><input name="b" style="padding: 30px 30px 30px 30px; font-size: 25px; margin-left: 170px" type="submit" class="pure-button pure-button-primary" value="The Map" onclick="window.location.href= 'http://www.iltechmap.com/map'" /></li>
                    <li class="buttonBig wobble-skew" id='goAdd'><input name="b" style="padding: 30px 30px 30px 30px; font-size: 25px; margin-left: 20px" type="submit" class="pure-button pure-button-primary" value="Add Your Company" onclick="window.location.href= 'http://www.iltechmap.com/add-comp'" /></li>
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
    <script src="js/bootstrap.js"></script>
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
		
		
		$(function() {		
			var url = window.location.href;
			var param = getParameterByName('b', url);
			if (param == 'The Map') {
				window.location = "http://www.iltechmap.com/map";
			};
			if (param == 'Add Your Company') {
				window.location = 'http://www.iltechmap.com/add-comp';
			};
		});
			
		
		
		
		
		
    </script>
    

</body>

</html>
