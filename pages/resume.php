<section data-id="resume" class="animated-section">
    <div class="page-title">
        <h2>Curriculum vitae</h2>
    </div>

    <div class="section-content">

        <div class="row">
            <div class="col-xs-12 col-sm-7">

                <div class="block-title">
                    <h3>Éducation</h3>
                </div>

                <div class="timeline timeline-second-style clearfix">
                    <?php
                    foreach ($data->training as $training) {
                        ?>
                        <div class="timeline-item clearfix">
                            <div class="left-part">
                                <h5 class="item-period">
                                    <?= $training->dateStart . "-" . $training->dateEnd ?>
                                </h5>
                                <span class="item-company">
                                    <?= $training->location ?>
                                </span>
                            </div>
                            <div class="divider"></div>
                            <div class="right-part">
                                <h4 class="item-title">
                                    <?= $training->title ?>
                                </h4>
                                <p>
                                    <?= $training->description ?>
                                </p>
                                <?php
                                if (
                                    property_exists($training, "usedLanguage") and
                                    is_iterable($training->usedLanguage)
                                ) {
                                    $languages = "";
                                    foreach ($training->usedLanguage as $language) {
                                        $languages .= "$language, ";
                                    }

                                    ?>
                                    <p>Language utilise: <strong><?= trim($languages, ', ') ?></strong></p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div class="white-space-50"></div>

                <div class="block-title">
                    <h3>Expérience</h3>
                </div>

                <div class="timeline timeline-second-style clearfix">
                    <?php
                    foreach ($data->experiences as $experience) {
                        ?>
                        <div class="timeline-item clearfix">
                            <div class="left-part">
                                <h5 class="item-period">
                                    <?= $experience->dateStart . "-" . $experience->dateEnd ?>
                                </h5>
                                <span class="item-company"><?= $experience->location ?></span>
                            </div>
                            <div class="divider"></div>
                            <div class="right-part">
                                <h4 class="item-title"><?= $experience->title ?></h4>
                                <p><?= $experience->description ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>

            <!-- Skills & Certificates -->
            <div class="col-xs-12 col-sm-5">

                <div class="white-space-10"></div>

                <!-- Coding Skills -->
                <?php
                foreach ($data->programingLanguages as $type => $languages) {
                    ?>
                    <div class="skills-info skills-second-style">
                        <div class="block-title">
                            <h3><?= $type ?> coding <span>Skills</span></h3>
                        </div>

                        <?php
                        foreach ($languages as $language => $lvl) {
                            ?>
                            <!-- Skill -->
                            <div class="skill clearfix">
                                <h4><?= $language ?></h4>
                                <div class="skill-value"><?= $lvl ?>%</div>
                            </div>
                            <div class="skill-container skill-<?= $lvl ?>">
                                <div class="skill-percentage"></div>
                            </div>
                            <!-- End of Skill -->
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }
                ?>
                <!-- End of Coding Skills -->

                <div class="white-space-10"></div>

                <!-- Knowledges -->
                <div class="block-title">
                    <h3>Connaissances</h3>
                </div>

                <ul class="knowledges">
                    <?php
                    foreach ($data->knowledge as $knowledge) {
                        echo "<li>{$knowledge}</li>";
                    }
                    ?>
                </ul>
                <!-- End of Knowledges -->
            </div>
            <!-- End of Skills & Certificates -->
        </div>

    </div>
</section>