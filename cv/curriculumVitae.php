<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <base href="https://madraz.fr/assets/">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="css/curriculumVitae.css">
</head>
<body>
<div class="page1 pb_before pb_after">
    <!--  Gauche-->
    <section id="info">
        <!--        <header id="photo"><img src="img/cv/photoRond.png" alt="photo"></header>-->
        <section style="padding: 15px;">
            <article id="contact">
                <h2>Contact</h2>
                <table>
                    <tr>
                        <td>
                            <img src="img/cv/info.png" alt="">
                        </td>
                        <td><?= strftime("%d %B %Y", strtotime($data->identity->birthday)) ?></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/cv/courier.png" alt="">
                        </td>
                        <td>
                            <?=
                            $data->identity->address->number . " " .
                            $data->identity->address->street . ", " .
                            $data->identity->address->postalCode . "<br>" .
                            $data->identity->address->city
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/cv/tel.png" alt="">
                        </td>
                        <td><?= $data->identity->phone ?></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/cv/mail.png" alt="">
                        </td>
                        <td>
                            <a href="mailto://<?= $data->identity->email ?>"
                               title="mail"><?= $data->identity->email ?></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/cv/ethernet.png" alt="">
                        </td>
                        <td>
                            <a href="https://madraz.fr">madraz.fr</a> <br>
                            <a href="https://github.com/madraz79">github.com/madraz79</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/cv/arrowBottom.png" alt="">
                        </td>
                        <td>
                            Titulaire du permis B <br>
                            avec véhicule
                        </td>
                    </tr>
                </table>
            </article>
            <article id="langues">
                <h2>Langues</h2>
                <table>
                    <?php
                    foreach ($data->languages as $language => $lvl) {
                        ?>
                        <tr>
                            <td style="text-align: center;">-</td>
                            <td><?= $language ?> : <?= $lvl ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </article>
            <article id="knowledge">
                <h2>Connaissance</h2>
                <div style="margin-left: 10px">
                    <ul>
                        <?php
                        foreach ($data->knowledge as $knowledge) {
                            echo "<li>{$knowledge}</li>";
                        }
                        ?>
                    </ul>
                </div>
            </article>
            <article id="hobbies">
                <h2>Centre d'intérêt</h2>
                <div style="margin-left: 10px">
                    <ul>
                        <?php
                        foreach ($data->hobbies as $hobby) {
                            ?>
                            <li>
                                <?= $hobby->title ?>
                                <?php
                                if (property_exists($hobby, "details")) {
                                    if (is_iterable($hobby->details)) {
                                        $details = "";
                                        foreach ($hobby->details as $detail) {
                                            $details .= $detail . ", ";
                                        }
                                        // Natation, Football,
                                        // Natation, Football
                                        echo "<br>(" . (trim($details, ', ')) . ")";
                                    } else {
                                        echo $hobby->details;
                                    }
                                }
                                ?>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </article>
        </section>
    </section>
    <!--  Droite -->
    <section id="main">
        <h1><?= $data->identity->firstName . " " . $data->identity->lastName ?></h1>
        <h2 style="text-align: center">Développeur Web </h2>
        <p style="text-align: center;margin:0;">Recherche de stage pour la période du <br> 26-10-20 au
            05-03-21</p>
        <!--    Skills -->
        <article id="skills">
            <h2>Compétences</h2>
            <ul>
                <?php
                foreach ($data->skills as $skill) {
                    echo "<li>{$skill}</li>";
                }
                ?>
            </ul>
            </table>
        </article>
        <!--    Formation -->
        <article>
            <h2>Formation</h2>
            <table>
                <?php
                foreach ($data->training as $training) {
                    ?>
                    <tr>
                        <td>
                            <p class="date"><?= $training->dateStart . "-" . $training->dateEnd ?>
                                (<?= $training->degree ?>)</p>
                            <p><?= $training->location ?></p>
                        </td>
                        <td>
                            <h3 class="titre"><?= $training->title ?></h3>
                            <p class="details"><?= $training->description ?></p>
                            <?php
                            if (property_exists($training, "usedLanguage")) {
                                ?>
                                <p class="language">
                                    <?php
                                    $languages = "";
                                    foreach ($training->usedLanguage as $language) {
                                        $languages .= $language . ", ";
                                    }
                                    echo trim($languages, ", ");
                                    ?>
                                </p>
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </article>
        <!--    Expérience-->
        <article>
            <h2>Expérience</h2>
            <table>
                <?php
                foreach ($data->experiences as $experience) {
                    ?>
                    <tr>
                        <td>
                            <p class="date"><?= $experience->dateStart . "-" . $experience->dateEnd ?></p>
                            <p><?= $experience->location ?></p>
                        </td>
                        <td>
                            <h3 class="titre"><?= $experience->title ?></h3>
                            <p class="details">
                                <?= $experience->description ?>
                            </p>
                            <?php
                            if (property_exists($training, "usedLanguage")) {
                                ?>
                                <p class="language">
                                    <?php
                                    $languages = "";
                                    foreach ($training->usedLanguage as $language) {
                                        $languages .= $language . ", ";
                                    }
                                    echo trim($languages, ", ");
                                    ?>
                                </p>
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </article>
    </section>
</div>
</body>
</html>