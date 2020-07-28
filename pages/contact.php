<section data-id="contact" class="animated-section">
    <div class="page-title">
        <h2>Contact</h2>
    </div>

    <div class="section-content">

        <div class="row">
            <!-- Contact Info -->
            <div class="col-xs-12 col-sm-4">
                <div class="lm-info-block gray-default">
                    <i class="lnr lnr-map-marker"></i>
                    <h4><?= $data->identity->address->city ?></h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                </div>

                <div class="lm-info-block gray-default">
                    <i class="lnr lnr-phone-handset"></i>
                    <h4><?= $data->identity->phone ?></h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                </div>

                <div class="lm-info-block gray-default">
                    <i class="lnr lnr-envelope"></i>
                    <h4><?= $data->identity->email ?></h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                </div>

                <div class="lm-info-block gray-default">
                    <i class="lnr lnr-checkmark-circle"></i>
                    <h4>En recherche de stage Disponible <br> du 26-10-2020 <br> au 05-03-2021</h4>
                    <span class="lm-info-block-value"></span>
                    <span class="lm-info-block-text"></span>
                </div>

            </div>
            <!-- End of Contact Info -->

            <!-- Contact Form -->
            <div class="col-xs-12 col-sm-8">
                <div id="map" class="map" data-address="<?=
                $data->identity->address->number . " " .
                $data->identity->address->street . ", " .
                $data->identity->address->postalCode . " " .
                $data->identity->address->city . ", " .
                $data->identity->address->country
                ?>"></div>
                <div class="block-title">
                    <h3>Comment puis-je <span>Vous aidez?</span></h3>
                </div>

                <form id="contact_form" class="contact-form" action="php/contact_form.php"
                      method="post">

                    <div id="messages" class="hidden"></div>

                    <div class="controls two-columns">
                        <div class="fields clearfix">
                            <div class="left-column">
                                <div class="form-group form-group-with-icon">
                                    <input id="form_name" type="text" name="name" class="form-control"
                                           placeholder="" required="required"
                                           data-error="Name is required." value="test">
                                    <label for="form_name">Nom complet</label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group form-group-with-icon">
                                    <input id="form_email" type="email" name="email"
                                           class="form-control" placeholder="" required="required"
                                           data-error="Valid email is required." value="toto@test.fr">
                                    <label for="form_email">Adresse Email</label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group form-group-with-icon">
                                    <input id="form_subject" type="text" name="subject"
                                           class="form-control" placeholder="" required="required"
                                           data-error="Subject is required." value="test">
                                    <label for="form_subject">Sujet</label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="right-column">
                                <div class="form-group form-group-with-icon">
                                    <textarea id="form_message" name="message" class="form-control"
                                              placeholder="" rows="7" required="required"
                                              data-error="Please, leave me a message.">Message de test</textarea>
                                    <label for="form_message">Message</label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="button btn-send">Envoyer message</button>
                    </div>
                </form>
            </div>
            <!-- End of Contact Form -->
        </div>

    </div>
</section>