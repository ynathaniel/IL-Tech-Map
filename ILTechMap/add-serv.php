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

    <title>ILTechMap Add Service</title>
	   
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
                    
                    <h1 class="tagline tagline-aid">Add Your Service</h1>
                    

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
        	<form action="" method="POST" class="pure-form pure-form-stacked">
            	<fieldset>
                <ul>
                	<li><label>Please Fill the Form Below:</label></li>
                    <li class="former"><input name="name" type="text" size="32.9px" placeholder="Company Name"></li>
                    <li class="former"><input name="type" type="text" size="32.9px" placeholder="Type"></li>
                    <li class="former"><input name="city" type="text" size="32.9px" placeholder="City"></li>
                    <li class="former"><input name="state" type="text" size="32.9px" placeholder="State"></li>
                    <li class="former"><input name="web" type="text" size="50px" placeholder="Website"></li>
                    <br>
                    <li><input name="submitB" type="submit" class="pure-button pure-button-primary" id="button" value="Submit"></li>
               </ul>
               </fieldset>
            </form>
            <?php
			/*echo $_SESSION['status'];
			echo $_SESSION['user'];
			echo $_SESSION['type'];*/
			$but = empty($_POST['submitB']);
			if (!$but)
			{
				addServ($_POST['name'],$_POST['type'],$_POST['city'],$_POST['state'],$_POST['web']);
			}
			?>
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
		
		
			
		
		
		
		
		
    </script>
    

</body>

</html>
