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

    <title>ILTechMap Service Providers</title>
	   
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
                    <li style="margin-left: 6px">
                    	<a href="http://www.iltechmap.com/emp-des">Companies</a>
                    </li>
                    <li class="menu-active" style="margin-left: 6px">
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
                    
                    <h1 class="tagline tagline-aid">Service Providers</h1>
                    

                </div>
            </div>

        </div>

    </div>

	<div class="width">
    <div class="container">
    	<hr>
       	<div class="row">
        <div class="col-lg-8 col-sm-8">
        <div id="touch">
        	<h1><strong>Why the Israeli Technology Map:</strong><h1>
            <div style="height: 73px; margin:25px 140px 70px 0p; font-size: 22px">
            If your target audience is the large community of Israelis living and working in the US, then offering your services and products on the <strong>“Israeli Technology Map"</strong> portal will put you in front of the right people.
            </div>
            
            
        	<form class="pure-form pure-form-stacked">
            	<fieldset>
                <ul style="margin-top: 30px; margin-bottom: 15px">
                    <li class="buttonBig wobble-skew" style="margin-left: 220px; margin-right: 20px"><input name="b" style="padding: 30px 30px 30px 30px; font-size: 25px" type="submit" class="pure-button pure-button-primary" value="Listed Service Providers" onClick="window.location.href= 'http://www.iltechmap.com/services'"></li>
                    <li class="buttonBig wobble-skew"><input name="b" style="padding: 30px 30px 30px 30px; font-size: 25px" type="submit" class="pure-button pure-button-primary" value="Add Your Service" onClick="window.location.href= 'http://www.iltechmap.com/add-serv'"></li>
               </ul>
               </fieldset>
            </form>
        </div>
        </div>
    	</div>
    <hr>
	<div class="container">
        <footer style="margin-top:100px">
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
		
		$(function() {		
			var url = window.location.href;
			var param = getParameterByName("b", url);
			if (param == 'Services') {
				window.location = "http://www.iltechmap.com/services";
			}
			if (param == 'Add Your Service') {
				window.location = 'http://www.iltechmap.com/add-serv';
			};
		});
		
    </script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
