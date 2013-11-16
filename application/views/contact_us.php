<div id="content">

    <div id="page-title">


        <div class="container clearfix">

            <h1>Contact Us</h1>


        </div>


    </div>


    <div id="slider" style="padding: 0;">

        <div class="slider-line" style="display: block !important;"></div>

        <div id="google-map" class="gmap" style="width:100%;"></div>

    </div>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.gmap.js') ?>"></script>

    <script type="text/javascript">

        $('#google-map').gMap({

            address: 'K-BLOCK Mahipalpur Extension Vasantkunj, New Delhi',
            maptype: 'ROADMAP',
            zoom: 14,
            markers: [
                {
                    address: "Khasra No.831 Mahipalpur Extn,VastantKunj Road, New Delhi-37",
                    html: '<div style="width: 300px;">' +
                        '<h3 style="padding-bottom: 8px;">Hi, we\'re <span>Envato</span></h3>' +
                        '<p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to ' +
                        '<strong>learn</strong> online. We operate <strong>marketplaces</strong>' +
                        ' where hundreds of thousands of people buy and sell digital goods every day, and a ' +
                        'network of educational blogs where millions learn <strong>creative skills</strong>.' +
                        '</p></div>'
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }

        });

    </script>


    <div class="content-wrap">


        <div class="container clearfix">


            <div class="col_two_third nobottommargin">


                <!-- ============================================
                    AJAX Contact Form
                ============================================= -->
                <div id="contactFormDiv">

                    <h2>Send us an <span>Email</span></h2>

                    <div id="contact-form-result"></div>
                    <?php if (isset($formMessage)) : ?>

                    <div>
                        <?php echo $formMessage; ?>
                    </div>
                    <?php endif; ?>

                    <form class="nobottommargin" id="contactForm" name="template-contactform"
                          action="<?php echo base_url('/contact') ?>" method="post">

                        <div class="col_half nobottommargin">
                            <label for="name">Name
                                <small>*</small>
                            </label>


                            <input type="text" id="name" name="name"
                                   value="<?php echo set_value('name'); ?>"
                                   class="cfInput required input-block-level" data-error_class="nameError"/>
                            <span class="contact-us-errors" id="nameError"><?php echo form_error('name'); ?></span>
                        </div>

                        <div class="col_half  col_last nobottommargin">
                            <label for="email">Email
                                <small>*</small>
                            </label>
                            <input type="text" id="email" name="email"
                                   value="<?php echo set_value('email'); ?>"
                                   class="email required input-block-level cfInput"
                                   data-error_class="emailError"/>
                            <span class="contact-us-errors" id="emailError"><?php echo form_error('email'); ?></span>
                        </div>


                        <div class="clear"></div>

                        <div class="col_full nobottommargin">
                            <label for="subject">Subject
                                <small>*</small>
                            </label>
                            <input type="text" id="subject" name="subject"
                                   value="<?php echo set_value('subject'); ?>"
                                   class="required input-block-level cfInput" data-error_class="subjectError"/>
                            <span class="contact-us-errors" id="subjectError"><?php echo form_error('email'); ?></span>
                        </div>

                        <div class="col_full nobottommargin">
                            <label for="message">Message
                                <small>*</small>
                            </label>
                            <textarea class="required input-block-level cfInput" id="message"
                                      name="message" rows="10" cols="30"
                                      data-error_class="messageError"><?php echo set_value('message'); ?></textarea>
                            <span class="contact-us-errors" id="messageError"><?php echo form_error('email'); ?></span>
                        </div>


                        <div class="col_full nobottommargin">
                            <button class="btn" type="submit" id="template-contactform-submit"
                                    name="template-contactform-submit" value="submit">Send Message
                            </button>
                        </div>

                    </form>

                </div>

                <script type="text/javascript">

                    $("#feedbackForm").validate();
                    $('.cfInput').keyup(function () {
                        var className = $(this).data('error_class');
                        $('#' + className).hide();
                    });
                </script>

            </div>


            <div class="col_one_third entry_content col_last nobottommargin">

                <div class="topmargin">

                    <div class="product-feature"><span class="icon-map-marker"></span>

                        <h3>Our Headquarters</h3>

                        <p>Khasra No.831,K-BLOCK <br/>Kole Wali Gali,Mahipalpur Extn<br/> VastantKunj Road, New Delhi-37</p></div>

                    <div class="product-feature"><span class="icon-phone"></span>

                        <h3>Call us:</h3>

                        <p>1800-3322-4453</p></div>

                    <div class="product-feature"><span class="icon-envelope-alt"></span>

                        <h3>Email Addresses</h3>

                        <p>info@asianlogistics.com <br/>sales@asianlogistics.com</p></div>

                    <div class="product-feature"><span class="icon-heart-empty"></span>

                        <h3>Need Support? Get It!</h3>

                        <p><a href="#">Support Center</a> <br/><a href="#">Our Forums</a></p></div>

                </div>

            </div>


        </div>


    </div>


</div>