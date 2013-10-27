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

    <a href="index.html"><img src="images/stickylogo.png" alt="CoWorker" title="CoWorker" /></a>

</div>

<div class="sticky-search-trigger">

    <a href="#"><i class="icon-search"></i></a>

</div>

<div class="sticky-menu-wrap">

<ul>

<li class="current"><a href="index.html"><div>Home</div><span>Let's Start here</span></a></li>
<li class=""><a href="#"><div>About Us</div><span>Something About Us</span></a></li>
<li><a href="#"><div>Services</div><span>Out of the Box</span></a>

    <ul>

        <li><a href="#"><div><i class="icon-tablet"></i> Ocean Freights</div></a></li>
        <li><a href="#"><div><i class="icon-eye-open"></i> Air Freights</div></a></li>
        <li><a href="#"><div><i class="icon-picture"></i> Logistic Solutions</div></a></li>


    </ul>

</li>

<li><a href="contact.html"><div>Contact</div><span>Get in Touch</span></a></li>

</ul>

</div>

<div class="sticky-search-area">

    <form id="sticky-search" action="http://themes.semicolonweb.com/html/coworker/search-results.php" method="get">

        <input type="text" id="sticky-search-input" name="q" placeholder="Type &amp; Hit Enter" value="" />

    </form>

    <div class="sticky-search-area-close">

        <a href="#"><i class="icon-remove"></i></a>

    </div>

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
               
                <li class="ts-phone"><a href="tel:+913326789234"><div class="ts-icon"></div><div class="ts-text">+91.33.26789234</div></a></li>
                <li class="ts-mail"><a href="mailto:coworker@abc.com"><div class="ts-icon"></div><div class="ts-text">coworker@abc.com</div></a></li>

            </ul>

        </div>

    </div>

</div>


<div id="header">


<div class="container clearfix">


<div id="logo">

    <a href="index.html" class="standard-logo"><img src="images/logo.png" alt="CoWorker" title="CoWorker" /></a>
    <a href="index.html" class="retina-logo"><img src="images/logo_2x.png" alt="CoWorker" title="CoWorker" width="204" height="120" /></a>

</div>


<div id="primary-menu">


<div class="rs-menu"><i class="icon-reorder"></i></div>

<ul id="main-menu">

<li class="current"><a href="index.html"><div>Home</div><span>Let's Start here</span></a></li>
<li class=""><a href="index.html"><div>About Us</div><span>Something About Us</span></a></li>
<li><a href="#"><div>Services</div><span>Out of the Box</span></a>

    <ul>

        <li><a href="#"><div><i class="icon-tablet"></i> Ocean Freight</div></a></li>
        <li><a href="#"><div><i class="icon-eye-open"></i> Air Freight</div></a></li>
        <li><a href="#"><div><i class="icon-picture"></i> Logistic Solutions</div></a></li>


    </ul>

</li>

<li><a href="contact.html"><div>Contact</div><span>Get in Touch</span></a></li>

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

                    <div style="background: url('images/world_map.png') no-repeat center center; height: 100px;">

                        <ul style="font-size: 13px;">

                            <li class="icon-map-marker">13/2 Elizabeth Street <br />Melbourne VIC 3000<br /> Australia</li>
                            <li class="icon-phone">+91-22-21144113</li>
                            <li class="icon-envelope-alt">info@coworker.com</li>

                        </ul>

                    </div>


                </div>


            </div>


            <div class="col_one_fourth">


                <div id="linkcat-2" class="widget widget_links clearfix">

                    <h4 class="widget-title">Blogroll</h4>

                    <ul class='xoxo blogroll'>

                        <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                        <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                        <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                        <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                        <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                        <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                        <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>

                    </ul>

                </div>


            </div>


            <div class="col_one_fourth">


                <div id="flickr_widget-1" class="widget flickr-widget clearfix">

                    <h4 class="widget-title">Flickr Photostream</h4>

                    <div id="flickr_widget" class="flickrfeed" data-id="52617155@N08" data-count="9" data-type="user"></div>

                </div>


            </div>


            <div class="col_one_fourth">


                <div class="widget clearfix">

                    <h4>Quick Contact</h4>

                    <div id="quick-contact-form-result"></div>

                    <form id="quick-contact-form" name="quick-contact-form" action="http://themes.semicolonweb.com/html/coworker/functions/footeremail.php" method="post" class="quick-contact-form nobottommargin">


                        <input type="text" class="required input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />

                        <input type="text" class="required email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />

                        <textarea class="required input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="30" cols="10" placeholder="Message"></textarea>

                        <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-small btn-inverse nomargin" value="submit">Send Email</button>


                    </form>

                    <script type="text/javascript">

                        $("#quick-contact-form").validate({
                            messages: {
                                'quick-contact-form-name': '',
                                'quick-contact-form-email': '',
                                'quick-contact-form-message': ''
                            },
                            submitHandler: function(form) {

                                $(form).find('.btn').prepend('<i class="icon-spinner icon-spin"></i>').addClass('disabled').attr('disabled', 'disabled');

                                $(form).ajaxSubmit({
                                    target: '#quick-contact-form-result',
                                    success: function() {
                                        $("#quick-contact-form").fadeOut(500, function(){
                                            $('#quick-contact-form-result').fadeIn(500);
                                        });
                                    },
                                    error: function() {
                                        $('#quick-contact-form-result').fadeIn(500);
                                        $("#quick-contact-form").find('.btn').remove('<i class="icon-spinner icon-spin"></i>').removeClass('disabled').removeAttr('disabled');
                                    }
                                });

                            }
                        });

                    </script>


                </div>


            </div>


        </div>


    </div>


</div>


<div class="clear"></div>


<div id="copyrights" class="copyrights-dark">

    <div class="container clearfix">


        <div class="col_half">

            Copyrights &copy; 2013 &amp; All Rights Reserved by CoWorker Inc.

        </div>

        <div class="col_half col_last tright">

            <a href="#">Privacy Policy</a><span class="link-divider">/</span><a href="#">Terms of Service</a><span class="link-divider">/</span><a href="#">FAQs</a>

        </div>


    </div>

</div>


</div>


<div id="gotoTop" class="icon-angle-up"></div>


<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js'); ?>"></script>









</body>



</html>