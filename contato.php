<?php include_once "_header.php"; ?>
    <div class="container clearfix m-top-100 m-bot-100" id="contato">

        <!-- Contact Form -->
        <div class="col_half">

            <div class="fancy-title title-dotted-border">
                <h3>ENTRE EM CONTATO</h3>
            </div>

            <div class="contact-widget">

                <div class="contact-form-result"></div>

                <form class="nobottommargin" id="template-contactform" name="template-contactform"
                      action="include/sendemail.php" method="post">

                    <div class="form-process"></div>

                    <div class="col_one_third">
                        <label for="template-contactform-name">Nome
                            <small>*</small>
                        </label>
                        <input type="text" id="template-contactform-name" name="template-contactform-name" value=""
                               class="sm-form-control required"/>
                    </div>

                    <div class="col_one_third">
                        <label for="template-contactform-email">E-mail
                            <small>*</small>
                        </label>
                        <input type="email" id="template-contactform-email" name="template-contactform-email" value=""
                               class="required email sm-form-control"/>
                    </div>

                    <div class="col_one_third col_last">
                        <label for="template-contactform-phone">Empresa</label>
                        <input type="text" id="template-contactform-phone" name="template-contactform-phone" value=""
                               class="sm-form-control"/>
                    </div>

                    <div class="clear"></div>

                    <div class="col_full">
                        <label for="template-contactform-subject">Assunto
                            <small>*</small>
                        </label>
                        <input type="text" id="template-contactform-subject" name="template-contactform-subject"
                               value="" class="required sm-form-control"/>
                    </div>

                    <div class="clear"></div>

                    <div class="col_full">
                        <label for="template-contactform-message">Mensagem
                            <small>*</small>
                        </label>
                        <textarea class="required sm-form-control" id="template-contactform-message"
                                  name="template-contactform-message" rows="6" cols="30"></textarea>
                    </div>

                    <div class="col_full hidden">
                        <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck"
                               value="" class="sm-form-control"/>
                    </div>

                    <div class="col_full">
                        <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit"
                                class="button button-3d nomargin">Enviar mensagem
                        </button>
                    </div>

                </form>
            </div>

        </div><!-- Contact Form End -->

        <!-- Google Map
        ============================================= -->
        <div class="col_half col_last map">

            <section id="google-map" class="gmap" style="height: 410px;"></section>

        </div><!-- Google Map End -->

        <div class="clear"></div>

        <!-- Contact Info
        ============================================= -->
        <div class="row clear-bottommargin">

            <div class="col-lg-6 col-md-6 bottommargin clearfix">
                <div class="feature-box fbox-center fbox-bg fbox-plain">
                    <div class="fbox-icon">
                        <i class="icon-map-marker2 icon-sm"></i>
                    </div>
                    <h3>Endereço<span class="subtitle">Rua Baleia Jubarte, nº242,<br> Loja 02, José Amândio.</span></h3>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 bottommargin clearfix">
                <div class="feature-box fbox-center fbox-bg fbox-plain">
                    <div class="fbox-icon">
                        <i class="icon-phone3 icon-sm"></i>
                    </div>
                    <h3>Telefone<span class="subtitle">+55 (47) 9 8438-3077<br>+55 (47) 3264-1443</span></h3>
                </div>
            </div>

        </div><!-- Contact Info End -->

    </div>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
    <script src="js/jquery.gmap.js"></script>

    <script src="js/maps.js"></script>
<?php include_once "_footer.php"; ?>