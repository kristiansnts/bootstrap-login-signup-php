<?php 

	require_once "includes/config_session.inc.php";
	require_once "includes/signup/signup_view.inc.php";
	require_once "includes/login/login_view.inc.php";

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login &amp; Register Templates</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Bootstrap</strong> Login &amp; Register Forms</h1>
                            <div class="description">
                            	<p>
	                            	This is a free responsive <strong>"login and register forms"</strong> template made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>, 
	                            	customize and use it as you like!
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5 ">
                        	
                        	<div class="form-box">
								<?php check_signin(); ?>
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="includes/login/login.inc.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control <?php echo (isset($_SESSION["login_errors"]) && isset($_SESSION["login_errors"]["form-username"])) ? "is-invalid" : ""; ?>" id="form-username">
											<div id="validationServer03Feedback" class="invalid-feedback">
												<?php check_login_errors_username(); ?>
											</div>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control <?php echo (isset($_SESSION["login_errors"]) && isset($_SESSION["login_errors"]["form-password"])) ? "is-invalid" : ""; ?>" id="form-password">
											<div id="validationServer03Feedback" class="invalid-feedback">
												<?php check_login_errors_pwd(); ?>
											</div>
				                        </div>
				                        <button type="submit" class="btn mt-4">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
							<div class="form-box">
								<?php check_signup(); ?>
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="includes/signup/signup.inc.php" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username" class="form-user-name form-control <?php echo (isset($_SESSION["signup_errors"]) && isset($_SESSION["signup_errors"]["form_username"])) ? "is-invalid" : ""; ?>" value="<?php echo (isset($_SESSION["signup_data"]["username"])) ? $_SESSION["signup_data"]["username"] : ""; ?>" id="form-username">
											<div id="validationServer03Feedback" class="invalid-feedback">
												<?php check_errors_username(); ?>
											</div>
				                        </div>
										<div class="form-group">
											<label class="sr-only" for="form-email">Email</label>
											<input type="text" name="form-email" placeholder="Email..." class="form-email form-control <?php echo (isset($_SESSION["signup_errors"]) && isset($_SESSION["signup_errors"]["form_email"])) ? "is-invalid" : ""; ?>" value="<?php echo (isset($_SESSION["signup_data"]["email"])) ? $_SESSION["signup_data"]["email"] : ""; ?>" id="form-email">
											<div id="validationServer03Feedback" class="invalid-feedback">
												<?php check_errors_email(); ?>
											</div>
										</div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password" class="form-password form-control <?php echo (isset($_SESSION["signup_errors"]) && isset($_SESSION["signup_errors"]["form_pwd"])) ? "is-invalid" : ""; ?>" id="form-password">
											<div id="validationServer03Feedback" class="invalid-feedback">
												<?php check_errors_pwd(); ?>
											</div>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-confirm-password">Confirm Password</label>
				                        	<input type="password" name="form-confirm-password" placeholder="Confirm Password" class="form-confirm-password form-control" id="form-confirm-password">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">About yourself</label>
				                        	<textarea name="form-about-yourself" placeholder="About yourself..." 
				                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
				                        </div>
				                        <button type="submit" class="btn mt-4">Sign me up!</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>