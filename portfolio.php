<?php
if (!isset($data)) {
    $data = new stdClass();
}
?>
<section data-id="portfolio" class="animated-section">
    <div class="page-title">
        <h2>Portfolio</h2>
    </div>

    <div class="section-content">

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <!-- Portfolio Content -->
                <div class="portfolio-content">

                    <ul class="portfolio-filters">
                        <!-- <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                        </li> -->
                        <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_detailed">Réalisations</a>
                        </li>
                    </ul>

                    <!-- Portfolio Grid -->
                    <div class="portfolio-grid three-columns">
                        <?php
                        foreach ($data->portfolio as $project):
                            ?>
                            <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                                <div class="portfolio-item-img">
                                    <img src="<?= $project->imageMin ?>" alt="Mockup Design 1"/>
                                    <a class="lightbox" title="Mockup Design 1" href="<?= $project->image ?>"></a>
                                </div>
                                <i class="far fa-image"></i>
                                <div>
                                    <h4 class="name"><?= $project->name ?></h4>
                                    <div class="link">
                                        <a class="web" href="<?= $project->link->web ?>" target="_blank">
                                            <i class="fas fa-globe"></i>
                                        </a>
                                        <a class="github" href="<?= $project->link->github ?>" target="_blank">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </figure>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
                <!-- End of Portfolio Content -->
            </div>
        </div>
    </div>
</section>