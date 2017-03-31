<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Bahana APP &middot; Sign I</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" /> 
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<!--<link rel="shortcut icon" href="/favicon.ico">-->
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/css/veneto-admin.min.css">
	<link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/app/css/app.css">
	<link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/assets/font-awesome/css/font-awesome.css">
	
	<body class="body-sign-in">
    <div class="container">
        <div align="center"><br /><br /><br />
			<img alt="image" src="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/app/images/logo-bahana.png" width="350">
		</div>
        <div class="panel panel-default form-container">
            <div class="panel-body">
              <?php 
			  $attributes = array('role' => 'form');
			  echo form_open("login/act",$attributes); ?>
                    <!--<h3 class="text-center margin-xl-bottom">Welcome Back!</h3>-->
					<p><?php echo $this->session->flashdata("result_login"); ?>
                    <div class="form-group text-center">
                        <label class="sr-only" for="user">Username</label>
                        <input type="user" class="form-control input-lg" id="username" name="username"   placeholder="Username">
					</div>
                    <div class="form-group text-center">                      
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password">
                    </div>
					<button type="submit" class="btn btn-primary btn-block btn-lg">SIGN IN</button>
              <?php echo form_close(); ?>
            </div>
            <!--<div class="panel-body text-center">
                <div class="margin-bottom">
                    <a class="text-muted text-underline" href="javascript:;">Forgot Password?</a>
                </div>
                <div>
                    Don't have an account? <a class="text-primary-dark" href="pages-sign-up.php">Sign up here</a>
                </div>
            </div>-->
        </div>
    </div>
</body>
</html>
