<!doctype html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> 
<html> <!--<![endif]-->
<head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Bahana APP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!--<link rel="shortcut icon" href="/favicon.ico">-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
          
        
        <!-- for modal popup -->
       
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/css/veneto-admin.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/app/css/app.css">
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/assets/font-awesome/css/font-awesome.css">
        
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/css/plugins/jquery-dataTables.min.css">

		<!-- /dist/css/plugins/jquery-select2.min.css">   /dist/assets/select2/select2.min.css-->

      
      
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/css/plugins/jquery-select2.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/css/plugins/jquery-selectBoxIt.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/css/plugins/jquery-chosen.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/css/plugins/bootstrap-tagsinput.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/css/plugins/bootstrap-switch.min.css">

        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css"/>
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/css/plugins/rickshaw.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/css/plugins/morris.min.css">       
        
        <!-- for modal popup -->
        <link rel="stylesheet" href="<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/dist/assets/plugins/jquery-bpopup/bpopup.css">
		

     <!-- CSS -->
     <style>
       #preloader {
        position:fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        background-color:#ffffff; /* change if the mask should have another color then white */
        z-index:99; /* makes sure it stays on top */
       }

       #status {
        width:200px;
        height:200px;
        position:absolute;
        left:50%; /* centers the loading animation horizontally one the screen */
        top:50%; /* centers the loading animation vertically one the screen */
        background-image:url(<?php echo base_url().'asset/theme/'.$GLOBALS['site_theme']; ?>/app/images/loading.gif); /* path to your loading animation */
        background-repeat:no-repeat;
        background-position:center;
        margin:-100px 0 0 -100px; /* is width and height divided by two */
       }
     </style>



    </head>
    <body class="">
	
	 <!-- Loading -->
     <div id="preloader">
      <div id="status"></div>
     </div>
	 
	 
        <header>
            <nav class="navbar navbar-default navbar-static-top no-margin" role="navigation">
                <div class="navbar-brand-group">
                    <a class="navbar-sidebar-toggle navbar-link" data-sidebar-toggle>
                        <i class="fa fa-lg fa-fw fa-bars"></i>
                    </a>
                    <a class="navbar-brand hidden-xxs" href="index.php">
                        <span class="sc-visible">
                            <span class="bold">B</span>
                        </span>
                        <span class="sc-hidden">
                            <span class="bold">Bahana</span> APP
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-nav-expanded pull-right margin-md-right">
                    <li class="hidden-xs">
                        <form class="navbar-form">
                            <div class="navbar-search">
                                <input type="text" placeholder="Search &hellip;" class="form-control">
                                <a href="pages-search.php" class="btn" type="submit"><i class="fa fa-search"></i></a>
                            </div>
                        </form>
                    </li>
                    
                  
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle navbar-user" href="javascript:;">
                            <img class="img-circle" src="<?php echo base_url().'files/'.$session['FilesName'].''; ?>">
                            <span class="hidden-xs">&nbsp;<?php echo $session['NamaLengkap'];?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu pull-right-xs">
                            <li class="arrow"></li>
                            <li><a href="<?php echo base_url(); ?>user/profile"><i class="fa fa-user"></i> &nbsp;Profile</a></li>
                            <li><a href="<?php echo base_url(); ?>setting"><i class="fa fa-cog"></i> &nbsp;Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>dashboard/logout"><i class="fa fa-sign-out"></i> &nbsp;Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                
            </nav>
        </header>
        
        <!-- HEADER END -->