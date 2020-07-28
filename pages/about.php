<?php
if (!isset($age)) {
    $age = 0;
}
?>
<section data-id="about-me" class="animated-section">
    <div class="page-title">
        <h2>A propos de <span>Moi</span></h2>
    </div>

    <div class="section-content">
        <!-- Personal Information -->
        <div class="row">
            <div class="col-xs-12 col-sm-7">
                <p>Passionné par le developpement Web. À l'affût de l'actualité Informatique et des nouvelles technologies Web.</p>
                <p>Stagiaire en Développement Web dans le centre - COS CRPF - Nanteau-sur-Lunain, Île-de-France.</p> 
                <p>Ces études ont pour objectif de me former dans l'optique de devenir développeur web et web mobile..</p>
            </div>

            <div class="col-xs-12 col-sm-5">
                <div class="info-list">
                    <ul>
                        <li>
                            <span class="title">Age</span>
                            <span class="value"><?= $age ?></span>
                        </li>

                        <li>
                            <span class="title">Adresse</span>
                            <span class="value">
                                                <?=
                                                $data->identity->address->number . " " .
                                                $data->identity->address->street . ", " .
                                                $data->identity->address->postalCode . " " .
                                                $data->identity->address->city . " " .
                                                $data->identity->address->country
                                                ?>
                                            </span>
                        </li>

                        <li>
                            <span class="title">e-mail</span>
                            <span class="value"><?= $data->identity->email ?></span>
                        </li>

                        <li>
                            <span class="title">Téléphone</span>
                            <span class="value"><?= $data->identity->phone ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of Personal Information -->

        <div class="white-space-50"></div>

        <!-- Services -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <h3>Ce que <span>je fais</span></h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="col-inner">
                    <div class="info-list-w-icon">
                        <!-- <div class="info-block-w-icon">
                            <div class="ci-icon">
                                <i class="lnr lnr-store"></i>
                            </div>
                            <div class="ci-text">
                                <h4>Ecommerce</h4>
                                <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio
                                    tortor bibendum massa, sit amet ultricies ex lectus scelerisque
                                    nibh. Ut non sodales.</p>
                            </div>
                        </div> -->
                        <div class="info-block-w-icon">
                            <div class="ci-icon">
                                <i class="lnr lnr-laptop-phone"></i>
                            </div>
                            <div class="ci-text">
                                <h4>Web Developer</h4>
                                <p>l'important travail d'un développeur web est de donner vie aux pages Web en utilisant HTML et CSS pour créer de merveilleux sites Web.</p>
                                <p>Evaluer les meilleurs langages pour leurs besoins et partager leurs créations avec d'autres personnes utilisant Git et GitHub.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6">
                <div class="col-inner">
                    <div class="info-list-w-icon">
                        <!-- <div class="info-block-w-icon">
                            <div class="ci-icon">
                                <i class="lnr lnr-pencil"></i>
                            </div>
                            <div class="ci-text">
                                <h4>Copywriting</h4>
                                <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio
                                    tortor bibendum massa, sit amet ultricies ex lectus scelerisque
                                    nibh. Ut non sodales.</p>
                            </div>
                        </div> -->
                        <div class="info-block-w-icon">
                            <div class="ci-icon">
                                <i class="lnr lnr-flag"></i>
                            </div>
                            <div class="ci-text">
                                <h4>Management</h4>
                                <p>Connaître parfaitement les différents pôle dans le secteur du web.</p>
                                <p>Maîtriser les aspects techniques mais également les aspects créatifs, tout en ayant des compétences en e-commerce.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Services -->


    </div>
</section>