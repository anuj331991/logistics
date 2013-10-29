<!DOCTYPE html>
<html dir="ltr" lang="en-US">



<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />


    <!-- ============================================
        Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic|Open+Sans:400,300,600,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css" />
    <link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" href="<?php echo base_url('assets/css/retina.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/colors.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/tipsy.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>" type="text/css" />


    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->


    <!-- ============================================
        External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>




    <!-- ============================================
        Document Title
    ============================================= -->
    <title></title>


</head>

<body>


<div id="wrapper" class="clearfix">


<div id="sticky-menu" class="clearfix">

<div class="container clearfix">

<div class="sticky-logo">

    <a href="<?php echo base_url('/'); ?>"><img src="images/stickylogo.png" alt="CoWorker" title="CoWorker" /></a>

</div>


<div class="sticky-menu-wrap">

<ul>

<li class="<?php if($active=="home"){echo "current";} ?>"><a href="<?php echo base_url('/'); ?>"><div>Home</div><span>Let's Start here</span></a></li>
<li class="<?php if($active=="about"){echo "current";} ?>"><a href="<?php echo base_url('about'); ?>"><div>About Us</div><span>Something About Us</span></a></li>
<li class="<?php if($active=="services"){echo "current";} ?>"><a href="<?php echo base_url('services/ocean'); ?>"><div>Services</div><span>Out of the Box</span></a>

    <ul>

        <li class="<?php if($active=="services"){echo "current";} ?>"><a href="<?php echo base_url('services/ocean'); ?>"><div><i class="icon-anchor"></i> Ocean Freights</div></a></li>
        <li class="<?php if($active=="services"){echo "current";} ?>"><a href="<?php echo base_url('services/air'); ?>"><div><i class="icon-plane"></i> Air Freights</div></a></li>
        <li class="<?php if($active=="services"){echo "current";} ?>"><a href="<?php echo base_url('services/logistics'); ?>"><div><i class="icon-truck"></i> Logistic Solutions</div></a></li>


    </ul>

</li>

<li class="<?php if($active=="contact"){echo "current";} ?>"><a href="<?php echo base_url('contact'); ?>"><div>Contact</div><span>Get in Touch</span></a></li>

</ul>

</div>



</div>

</div>

<div id="top-bar">

    <div class="container clearfix">

        <div id="top-menu">



        </div>


        <div id="top-social">

            <ul>

                <li class="ts-facebook"><a href="#"><div class="ts-icon"></div><div class="ts-text">Facebook</div></a></li>
                <li class="ts-twitter"><a href="#"><div class="ts-icon"></div><div class="ts-text">Twitter</div></a></li>

                <li class="ts-phone"><a href="tel:+913326789234" style="background-color: #f88f16"><div class="ts-icon"></div><div class="ts-text">+91.33.26789234</div></a></li>
                <li class="ts-mail"><a href="mailto:coworker@abc.com" style="background-color: #1fd36f"><div class="ts-icon"></div><div class="ts-text">coworker@abc.com</div></a></li>

            </ul>

        </div>

    </div>

</div>


<div id="header">


<div class="container clearfix">


<div id="logo">

    <a href="<?php echo base_url('/'); ?>" class="standard-logo"><img src="images/logo.png" alt="CoWorker" title="CoWorker" /></a>
    <a href="<?php echo base_url('/'); ?>" class="retina-logo"><img src="images/logo_2x.png" alt="CoWorker" title="CoWorker" width="204" height="120" /></a>

</div>


<div id="primary-menu">


<div class="rs-menu"><i class="icon-reorder"></i></div>

<ul id="main-menu">

<li class="<?php if($active=="home"){echo "current";} ?>"><a href="<?php echo base_url('/'); ?>"><div>Home</div><span>Let's Start here</span></a></li>
<li class="<?php if($active=="about"){echo "current";} ?>"><a href="<?php echo base_url('about'); ?>"><div>About Us</div><span>Something About Us</span></a></li>
<li class="<?php if($active=="services"){echo "current";} ?>"><a href="<?php echo base_url('services/ocean'); ?>"><div>Services</div><span>Out of the Box</span></a>

    <ul>

        <li class="<?php if($active=="services"){echo "current";} ?>"><a href="<?php echo base_url('services/ocean'); ?>"><div><i class="icon-anchor"></i> Ocean Freight</div></a></li>
        <li class="<?php if($active=="services"){echo "current";} ?>"><a href="<?php echo base_url('services/air'); ?>"><div><i class="icon-plane"></i> Air Freight</div></a></li>
        <li class="<?php if($active=="services"){echo "current";} ?>"><a href="<?php echo base_url('services/logistics'); ?>"><div><i class="icon-truck"></i> Logistic Solutions</div></a></li>


    </ul>

</li>

<li class="<?php if($active=="contact"){echo "current";} ?>"><a href="<?php echo base_url('contact'); ?>"><div>Contact</div><span>Get in Touch</span></a></li>

</ul>


</div>


</div>


</div>

<?php echo $template['body'] ?>





<div id="footer" class="footer-dark">


    <div class="container clearfix">


        <div class="footer-widgets-wrap clearfix">


            <div class="col_one_fourth">


                <div class="widget portfolio-widget clearfix">


                    <h4>About <span>Co</span>Worker</h4>

                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh.</p>

                    


                </div>


            </div>


            <div class="col_one_fourth">


                <div class="widget clearfix">


                    <h4 class="widget-title">Quick Links</h4>

                    
                    <ul style="margin-left: 0px">

                        <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li><a href="<?php echo base_url('about'); ?>">About Us</a></li>
                        <li><a href="<?php echo base_url('services'); ?>">Services</a></li>
                        <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>

                    </ul>

                </div>


            </div>


            <div class="col_one_fourth">


                <div class="widget clearfix">


                    <h4 class="widget-title">Get In Touch</h4>
                    If you have any questions, don't hesitate to contact us
                    <br>
                    <ul>

                        <li class="icon-map-marker">13/2 Elizabeth Street <br />Melbourne VIC 3000<br /> Australia</li>
                        <li class="icon-phone">+91-22-21144113</li>
                        <li class="icon-envelope-alt">info@coworker.com</li>

                    </ul>

                </div>


            </div>


            <div class="col_one_fourth">


                <div class="widget clearfix">

                    <h4>Newsletter Subscribe</h4>

                    <div id="quick-contact-form-result"></div>

                    <form id="quick-contact-form" name="quick-contact-form" action="#" method="post" class="quick-contact-form nobottommargin">

                        Stay up to date with latest news from our company. We promise we won’t spam you.

                        <input type="text" class="required input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Enter Your Email Here.." />


                        <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-small btn-inverse nomargin" value="submit">Send Email</button>


                    </form>




                </div>


            </div>


        </div>


    </div>


</div>


<div class="clear"></div>


<div id="copyrights" class="copyrights-dark">

    <div class="container clearfix">


        <div class="col_half">

            Copyrights &copy; <?php echo date("Y"); ?> &amp; All Rights Reserved Nolan

        </div>

        <div class="col_half col_last tright">

            Website designed by <a href="http://www.xcdsoft.com/" target="_blank" style="color: #57B3DF" >XCD Soft</a>

        </div>


    </div>

</div>


</div>


<div id="gotoTop" class="icon-angle-up"></div>


<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js'); ?>"></script>









</body>



</html>