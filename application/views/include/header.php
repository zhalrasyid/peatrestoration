<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Shrimp Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">
        <!--
        Artcore Template
		http://www.templatemo.com/preview/templatemo_423_artcore
        -->
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/templatemo-misc.css">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/templatemo-style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/dataTables/dataTables.bootstrap.css">
		<script src="<?php echo base_url();?>asset/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
		
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->


        <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> <!-- /#pageloader -->

        <header class="site-header container-fluid">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                    <h1><a href="<?php echo base_url();?>"><em>Shrimp</em> Cultivation</a></h1>
                    <span>Web GIS: spatial analysis for Shrimp Cultivation</span>
                </div> <!-- /.logo -->
                <div class="social-top col-md-6 col-sm-6">
                    <ul>
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-flickr"></a></li>
                        <li><a href="#" class="fa fa-rss"></a></li>
                    </ul>
                </div> <!-- /.social-top -->
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="row">
                    <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                        <a id="search-icon" class="btn-left fa fa-search" href="#search-overlay"></a>
                        <div id="search-overlay">
                            <a href="#search-overlay" class="close-search"><i class="fa fa-times-circle"></i></a>
                            <div class="search-form-holder">
                                <h2>Type keywords and hit enter</h2>
                                <form id="search-form" action="#">
                                    <input type="search" name="s" placeholder="" autocomplete="off" />
                                </form>
                            </div>
                        </div><!-- #search-overlay -->
                        <a href="#" class="btn-left arrow-left fa fa-angle-left"></a>
                        <a href="#" class="btn-left arrow-right fa fa-angle-right"></a>
                    </div> <!-- /.main-header-left -->
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
                            <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                            <li><a href="<?php echo base_url();?>index.php/pages/view/process">Process</a></li>
                            <li><a href="#">SPATIAL</a>
                                <ul>                                    
                                    <li><a href="<?php echo base_url();?>index.php/spatial/buffer">BUFFER</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/spatial/dissolve">DISSOLVE</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/spatial/intersect">INTERSECT</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/welcome/dropdowndata/04Union">UNION</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/welcome/dropdowndata/05Query">Query</a></li>
                                </ul>
                            </li>
                            <li><a href="#">DATA</a>
                                <ul>                                    
                                    <li><a href="<?php echo base_url();?>index.php/pages/view/00Upload">Upload Data</a></li>
									<li><a href="<?php echo base_url();?>index.php/spatial/spatialTable/SpatialTable">Spatial Table Names</a></li>
                                </ul>
                            </li>
                            <li><a href="#">VIEW MAP</a>
                                <ul>
                                    <li><a href="<?php echo base_url();?>index.php/pages/visual/MapView">MAPS</a></li>
                                </ul>
                            </li>                            
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id="responsive-menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="#">Projects</a>
                        <ul>
                            <li><a href="projects-2.html">Two Columns</a></li>
                            <li><a href="projects-3.html">Three Columns</a></li>
                            <li><a href="project-details.html">Project Single</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog Masonry</a></li>
                            <li><a href="blog-single.html">Post Single</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="our-team.html">Our Team</a></li>
                            <li><a href="archives.html">Archives</a></li>
                            <li><a href="grids.html">Columns</a></li>
                            <li><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </header> <!-- /.site-header -->