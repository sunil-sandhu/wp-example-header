<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="inpala.co: a web design company based in Nottingham that build beautiful and dynamic websites to help small businesses and startups grow."/>
    <meta name="keywords" content="web, design, webdesign, nottingham, agency, html, css, javascript, web agency, web design, build a website" />
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
 
    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <link href="<?php bloginfo('template_directory');?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/clean-blog.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet"><!-- Custom Fonts -->
    <link href="<?php bloginfo('template_directory');?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand" href="http://inpala.co"><img style="width: 60px;" src="<?php bloginfo('template_directory');?>/img/inpala.png">
        </a> </div>

        <!-- /.container -->
    </nav>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                             <span class="subheading"><?php echo get_bloginfo( 'description' ); ?></span></div>
                    
                </div>
            </div>
        </div>
    </header>
    
        <style>
        .intro-header {
            background-image: url(<?php bloginfo('template_directory');?>/img/bg.jpg)
        }
    </style>
    
    <?php wp_head();?>
</head>
