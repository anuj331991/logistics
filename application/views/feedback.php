<div id="content">

    <div id="page-title">


        <div class="container clearfix">

            <h1>Feedback</h1>


        </div>


    </div>


    <div class="content-wrap">


        <div class="container clearfix">


            <div class="col_two_third nobottommargin">


                <!-- ============================================
                    AJAX Contact Form
                ============================================= -->
                <div id="feedBackFormDiv">

                    <h2>Send us an <span>Email</span></h2>

                    <div id="feedback-form-result"></div>
                    <?php if (isset($formMessage)) : ?>

                        <div>
                            <?php echo $formMessage; ?>
                        </div>
                    <?php endif; ?>

                    <form class="nobottommargin" id="feedbackForm" name="template-contactform"
                          action="<?php echo base_url('/feedback') ?>" method="post">

                        <div class="col_full nobottommargin">
                            <label for="feedbackType">Feedback of</label>
                            <select id="feedbackType" name="feedbackType" class="input-block-level">
                                <option value="Company">Company</option>
                                <option value="Website">Website</option>
                            </select>
                        </div>
                        <div class="col_full nobottommargin">
                            <label for="feedbackCategory">Category of Feedback</label>
                            <select id="feedbackCategory" name="feedbackCategory" class="input-block-level">
                                <option value="Suggestion/Praise">Suggestion/Praise</option>
                                <option value="Website Development">Website Development</option>
                            </select>
                        </div>
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
                            <label for="telephone">Telephone
                                <small>*</small>
                            </label>
                            <input type="text" id="telephone" name="telephone" value="" class="required input-block-level cfInput" data-error_class="telephoneError">
                            <span class="contact-us-errors" id="telephoneError"><?php echo form_error('telephone'); ?></span>
                        </div>
                        <div class="col_full nobottommargin">
                            <label for="address">Address
                            </label>
                            <textarea class=" input-block-level " id="address"
                                      name="address" rows="10" cols="30"
                                      data-error_class="messageError"><?php echo set_value('comment'); ?></textarea>

                        </div>
                        <div class="col_full nobottommargin">
                            <label for="comment">Comment
                                <small>*</small>
                            </label>
                            <textarea class="required input-block-level cfInput" id="comment"
                                      name="comment" rows="10" cols="30"
                                      data-error_class="commentError"><?php echo set_value('comment'); ?></textarea>
                            <span class="contact-us-errors"
                                  id="commentError"><?php echo form_error('comment'); ?></span>
                        </div>


                        <div class="col_full nobottommargin">
                            <button class="btn" type="submit" id="template-contactform-submit"
                                    name="template-contactform-submit" value="submit">Send Feedback
                            </button>
                        </div>

                    </form>

                </div>

                <script type="text/javascript">

                    $("#feedbackFor").validate();
                    $('.cfInput').keyup(function () {
                        var className = $(this).data('error_class');
                        $('#' + className).hide();
                    });
                </script>

            </div>


            <div class="col_one_third entry_content col_last nobottommargin">

                <div class="topmargin">

                    <img src="<?php echo base_url('assets/images/feedback.jpg'); ?>">

                </div>

            </div>


        </div>


    </div>


</div>