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

    <title>ILTechMap Create Profile</title>
	   
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
                    
                    <h1 class="tagline tagline-aid">Create Your Profile</h1>
                    

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
        	<form action="" method="POST" class="pure-form pure-form-stacked" enctype="multipart/form-data">
            	<fieldset>
                <ul>
                	<li class="former"><label>Email*</label></li>
                	<li class="former"><input class="pure-input-1-3" name="email" type="email" required></li>
                    <li class="former"><label>Password*</label></li>
                    <li class="former"><input class="pure-input-1-3" name="pass" type="password" required></li>
                    <li class="former"><label>First Name*</label></li>
                    <li class="former"><input class="pure-input-1-3" name="first" type="text" required></li>
                    <li class="former"><label>Last Name*</label></li>
                    <li class="former"><input class="pure-input-1-3" name="last" type="text" required></li>
                    <li class="former"><label>Phone*</label></li>
                    <li class="former"><input class="pure-input-1-3" name="phone" type="text" required></li>
                    <li class="former"><label>Address*</label></li>
                    <li class="former"><textarea name="address" cols="70px" maxlength="500" rows="5" required></textarea></li>
                    <li class="former"><label>Cover Letter*</label></li>
                    <li class="former"><textarea name="cover" cols="70px" maxlength="500" rows="5" required></textarea></li>
                    <br>
                    <div style="margin-left: 15px">
                    	<li><label>Upload Resume:</label></li>
                    	<li class="former" style="margin-top:8px">
                    		<input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                    		<input name="resume" type="file">
                    	</li>
                    </div>
                    <li style="padding-top: 11px"><label>LinkedIn Profile*</label></li>
                    <li class="former"><input class="pure-input-1-3" name="Linked" type="text" required></li>
                    <li class="former"><label>Desired Position(s)*</label></li>
                    <li class="former"><input class="pure-input-1-3" name="position" type="text" required></li>
                    <li class="former"><label>Position Level*</label></li>
                    <li class="former"><select name="level">
                    	<option>Intern</option>
                        <option>Junior</option>
                        <option>Mid-level</option>
                        <option>Senior</option>
                        <option>Expert</option>
                        <option>Manager</option>
                        <option>Director</option>
                        <option>VP</option>
                        <option>CxO</option>
                    </select></li>
                    <li class="former"><label>Education Level*</label></li>
                    <li class="former"><select name="education">
                    	<option>High School</option>
                        <option>Associate (2 years)</option>
                        <option>Bachelor (4 years)</option>
                        <option>MBA</option>
                        <option>PhD</option>
                        <option>Other</option>
                    </select></li>
                    <li class="former"><label>If you selected 'other' for Education Level, please explain:</label></li>
                    <li class="former"><textarea name="EduOther" cols="70px" maxlength="500" rows="5"></textarea></li>
                    <li class="former"><label>Industry Related Certification(s)</label></li>
                    <li class="former"><input class="pure-input-1-3" name="certs" type="text"></li>
                    <li class="former"><label>Total Years of Experience*</label></li>
                    <li class="former"><input class="pure-input-1-3" name="years" type="text" required></li>
                    <li class="former"><label>US Work Status*</label></li>
                    <li class="former"><select name="workStatus">
                    	<option>US Citizen</option>
                        <option>US Resident</option>
                        <option>Working Visa</option>
                        <option>Need Visa Transfer</option>
                        <option>Need Sponsorship</option>
                        <option>Other</option>
                    </select></li>
                    <li class="former"><label>If you selected 'other' for US Work Status, please explain:</label></li>
                    <li class="former"><textarea name="WorkOther" cols="70px" maxlength="500" rows="5"></textarea></li>
                    <li class="former"><label>Traveling*</label></li>
                    <li class="former"><select name="Travel">
                    	<option>Up to 25%</option>
                        <option>Up to 50%</option>
                        <option>Up to 75%</option>
                        <option>None</option>
                    </select></li>
                    <li class="former"><label>Languages and level of proficiency*</label></li>
                    <li class="former"><textarea name="languages" cols="70px" maxlength="500" rows="5" required></textarea></li>
                    <li class="former"><label>Expected Annual Salary*</label></li>
                    <li class="former"><select name="salary">
                    	<option>$30-$50k</option>
                        <option>$51-$70k</option>
                        <option>$71-$90k</option>
                        <option>$91-120k</option>
                        <option>$121-150k</option>
                        <option>$151-199k</option>
                        <option>$200k+</option>
                        <option>N/A (if looking for Hourly or Project)</option>
                    </select></li>
                    <li class="former"><label>If you selected 'N/A' for Expected Annual Salary, please explain:</label></li>
                    <li class="former"><textarea name="salaryOther" cols="70px" maxlength="500" rows="5"></textarea></li>
                    <br>
                    <li class="former"><input name="submitB" type="submit" class="pure-button pure-button-primary" id="button" value="Welcome"></li>
               </ul>
               </fieldset>
            </form>
            <?php
			$but = empty($_POST['submitB']);
			if (!$but)
			{
				$candidate = array($_POST['email'],$_POST['pass'],$_POST['first'],$_POST['last'],$_POST['phone'],$_POST['address'],$_POST['cover'],$_POST['Linked'],$_POST['position'],$_POST['level'],$_POST['education'],$_POST['EduOther'],$_POST['certs'],$_POST['years'],$_POST['workStatus'],$_POST['WorkOther'],$_POST['Trvael'],$_POST['languages'],$_POST['salary'],$_POST['salaryOther']);
				$num = addCand($candidate);
				if ($num == "blah")
				{
					echo "<script>alert('Account with this email already exists!');</script>";
				}
				else
				{
					if ($_FILES['resume']['size'] > 0)
					{
						$fileName = $_FILES['resume']['name'];
						$fileType = $_FILES['resume']['type'];
						$fileSize = $_FILES['resume']['size'];
						$fileTmp = $_FILES['resume']['tmp_name'];
						
						$fp = fopen($tmp, 'r');
						$content = fread($fp, filesize($tmp));
						$content = addslashes($content);
						fclose($fp);
						
						$con = connect();
						
						$uploadDir = 'resumes/';
						$uploadFile = $uploadDir . $num . '-' . basename($fileName);
						$move = move_uploaded_file($fileTmp, $uploadFile);
						$location = basename($fileName);
						if (!$move)
						{
							echo '<script>alert(File was not uploaded!);</script>';
						}
						addResume($uploadFile, $num);
						echo '<script>alert('.$uploadFile.');</script>';
						close($con);
					}
					$_SESSION['status'] = true;
					$_SESSION['user'] = $_POST['email'];
					echo '<script>alert("Account created!"); window.location.replace("http://www.iltechmap.com/map");</script>';
				}
			}
			?>
        </div>
        </div>
    	</div>
    <hr>
	<div class="container">
        <footer style="margin-top: 100px">
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
		
		window.onload = function() {			
			var url = window.location.href;
			var mapurl = url.substring(49, 56);
			if (mapurl == 'The+Map')
			{
				window.location.href = 'http://www.iltechmap.com/map';
			}
		};
			
		
		
		
		
		
    </script>
    

</body>

</html>
