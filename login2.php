<?php include __DIR__ . '/config/config.php'; ?>
<?php include __DIR__ . '/config/paths.php'; ?>

<?php 
	/**
	 * Include connection file
	 */
	include __DIR__ . '/config/connect.php'; 

	$emails = "";
	$passs = "";

	if (isset($_POST['login'])) {
		if (isset($_POST['email']) && isset($_POST['password'])) {
			$user_login = mysql_real_escape_string($_POST['email']);
			$user_login = mb_convert_case($user_login, MB_CASE_LOWER, "UTF-8");	
			$password_login = mysql_real_escape_string($_POST['password']);		
			
			$num = 0;
			$password_login_md5 = md5($password_login);
			$result = mysql_query("SELECT * FROM user WHERE (email='$user_login') AND password='$password_login_md5' AND activation='yes'");
			$num = mysql_num_rows($result);
			$get_user_email = mysql_fetch_assoc($result);
				$get_user_uname_db = $get_user_email['id'];
			if ($num>0) {
				$_SESSION['user_login'] = $get_user_uname_db;
				setcookie('user_login', $user_login, time() + (365 * 24 * 60 * 60), "/");
				
				if (isset($_REQUEST['ono'])) {
					$ono = mysql_real_escape_string($_REQUEST['ono']);
					header("location: orderform.php?poid=".$ono."");
				}else {
					header('location: index.php');
				}
				exit();
			}
			else {
				$result1 = mysql_query("SELECT * FROM user WHERE (email='$user_login') AND password='$password_login_md5' AND activation='no'");
			$num1 = mysql_num_rows($result1);
			$get_user_email1 = mysql_fetch_assoc($result1);
				$get_user_uname_db1 = $get_user_email1['id'];
			if ($num1>0) {
				$emails = $user_login;
				$activacc ='';
			}else {
				$emails = $user_login;
				$passs = $password_login;
				$error_message = '<br><br>
					<div class="maincontent_text" style="text-align: center; font-size: 18px;">
					<font face="bookman">Email or Password incorrect.<br>
					</font></div>';
			}
				
			}
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title> <?php echo $TITLE; ?> | Login </title>
		<meta name="description" content="Grandin is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Grandin Admin, Grandinadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="<?php echo $BASE_URL; ?>vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="<?php echo $BASE_URL; ?>admin/dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<h4 class="white-text bold-text">Marketplace</h4>
					</a>
				</div>
				<!-- <div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Don't have an account?</span>
					<a class="inline-block btn btn-primary  btn-rounded" href="signup.html">Sign Up</a>
				</div> -->
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div id="login-bg" class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div id="cus-card" class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-light mb-10">Sign in</h3>
											<?php if(isset($fmsg)) {
                                            	?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php
                                        	} ?>
										</div>	
										<div class="form-wrap">
											<form method="POST" action="#">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Username</label>
													<input id="input-round" type="text" name="username" class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter email">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a>
													<div class="clearfix"></div>
													<input id="input-round" type="password" name="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Enter pwd">
												</div>
												
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" required="" type="checkbox">
														<label for="checkbox_2"> Keep me logged in</label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-5">
														<a style="text-decoration: underline" class="capitalize-font txt-info block mb-10 pull-left font-12" href="forgot-password.html">Become a Merchant </a>
														<a style="text-decoration: underline" class="capitalize-font txt-info block mb-10 pull-right font-12" href="forgot-password.html">Become a Buyer </a>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-primary btn-rounded">sign in</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="<?php echo $BASE_URL; ?>vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo $BASE_URL; ?>vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?php echo $BASE_URL; ?>vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="<?php echo $BASE_URL; ?>admin/dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="<?php echo $BASE_URL; ?>admin/dist/js/init.js"></script>
	</body>
</html>
