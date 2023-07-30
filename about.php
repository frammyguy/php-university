<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/main-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Par mums</title>
</head>

<body>

    <section class="mainPage">
        <?php
        include_once('pages/_header.php');
        ?>

        <div class="leftSide">
            <a href="/">
                <img src="icons/logo.png" alt="main logo">
            </a>
        </div>
        <div class="rightSide">
            <section class="info">
                <div class="info-buttons w-100">
                    <button id="aboutUs" class="btn btn-dark">
                        Informācija par mums
                    </button>
                    <button id="contacts" class="btn btn-dark">
                        Kontakti
                    </button>
                    <button id="docs" class="btn btn-dark">
                        Pieteikšanās dokumenti
                    </button>
                    <button id="normDocs" class="btn btn-dark">
                        Noteikumi
                    </button>
                </div>
                <div id="aboutUsDiv">
                    <h2 class="about_person_text_title">Papildu profesionālās izglītības nodaļa</h2>
                    <div class="about_info">
                    <p>Papildu profesionālās izglītības nodaļa</p>

                    <p>Vadība rada un attīsta novatorisku izglītības vidi pieredzējušiem cilvēkiem
                        augsti kvalificētu konkurētspējīgu speciālistu sagatavošana; diriģē
                        inženiertehniskā personāla vajadzību uzraudzība un pieprasītākā apzināšana
                        speciālistu kvalifikācijas paaugstināšanas un pārkvalifikācijas jomas.
                    </p>

                    <p>Departamenta prioritārie uzdevumi ir padziļināta apmācība un profesionāli
                        augstskolas mācībspēku, vadītāju un
                        organizāciju un uzņēmumu speciālisti.
                    </p>

                    <p>Pārvaldība cieši sadarbojas ar
                        uzņēmumi - partneri papildu profesionālās izglītības jomā, t.sk
                        tostarp lielie aizsardzības rūpniecības uzņēmumi.
                    </p>

                    <p>Daudzus gadus katedra īsteno programmas mašīnbūves jomā,
                        mūsdienu tehnoloģiskie procesi, raķešu un kosmosa tehnoloģijas, dzinēju būve,
                        ieroču sistēmas, vides drošība.
                    </p>

                    <p>Apmācības beigās un sekmīgi pabeidzot gala kontroli, studenti tiek izsniegti
                        noteiktas formas dokumenti: kvalifikācijas paaugstināšanas sertifikāti un diplomi (ar
                        pielikums) par profesionālo pārkvalifikāciju. Prakses gadījumā a
                        prakses sertifikāts.
                    </p>

                    </div>
                    <div id="carouseles" class="carouseles">
                        <div id="carousel1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel1" data-slide-to="1"></li>
                                <li data-target="#carousel1" data-slide-to="2"></li>
                                <li data-target="#carousel1" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/akkr/akkr1_1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/akkr/akkr1_2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/akkr/akkr1_3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/akkr/akkr1_4.jpg" alt="Fourth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div id="carousel2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel2" data-slide-to="1"></li>
                                <li data-target="#carousel2" data-slide-to="2"></li>
                                <li data-target="#carousel2" data-slide-to="3"></li>
                                <li data-target="#carousel2" data-slide-to="4"></li>
                                <li data-target="#carousel2" data-slide-to="5"></li>
                                <li data-target="#carousel2" data-slide-to="6"></li>
                                <li data-target="#carousel2" data-slide-to="7"></li>
                                <li data-target="#carousel2" data-slide-to="8"></li>
                                <li data-target="#carousel2" data-slide-to="9"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/akkr2/akkr2_1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/akkr2/akkr2_2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/akkr2/akkr3_1.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/akkr2/akkr3_2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/akkr2/akkr3_3.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/akkr2/akkr3_4.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/akkr2/akkr3_5.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/akkr2/akkr3_6.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/akkr2/akkr4.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/akkr2/akkr6.jpg" alt="Fourth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="slicer"></div>
                </div>
                <div id="aboutPersonDiv">
                    <div id="aboutPerson" class="about_person">
                        <div class="about_person_text">
                            <div class="about_person_text_desc">

                                <br>Struktūra un kontakti: <br>Priekšnieks<br>**
                                <br>Tel.:
                                <br>Mob. Tel.:
                                <br>Е-mail:
                                <br>Адрес:
                                <br>
                                <br>Vadošais speciālists<br>**
                                <br>Tel.:
                                <br>Mob. Tel.:
                                <br>
                                <br>Vadošais dokumentu speciālists<br>**
                                <br>Tel.:
                                <br>Mob. Tel.:
                                <br>E-mail:
                                <br>
                                <br>Dokumentu pārvaldnieks<br>**
                                <br>Telefons:
                                <br>Mob. Tel.:
                                <br>E-mail:
                                <br>
                                <br>Izglītības un metodiskā darba speciālists<br>**
                                <br>Telefons:
                                <br>Mob. Tel.:
                                <br>E-mail:
                                <br>
                                <br>Tālākizglītības nodaļa un<br> prakses vietas mācībspēkiem
                                <br>Departamenta direktors<br>**
                                <br>Tel.:
                                <br>Е-mail:
                                <br>
                                <br>Profesionālās izglītības centrs (strādnieki)
                                <br>Departamenta direktors<br>**
                                <br>Tel.:
                                <br>Mob. Tel.:
                                <br>Е-mail:
                                <br>
                                <br>Metodists<br>**
                                <br>Tel.:
                                <br>Mob. Tel.:
                                <br>Е-mail:
                            </div>
                        </div>
                    </div>
                    <div class="slicer"></div>
                </div>
                <div id="docsDiv">
                    <div class="docsDiv">
                        <?php
                        include_once('DB/writeDoc.php');
                        $db = new writeDoc();
                        $link = $db->connect();
                        $sql = "SELECT * FROM docs WHERE Type LIKE '9' ORDER BY Date ASC";
                        if ($result = mysqli_query($link, $sql)) {
                            foreach ($result as $row) {
                                $db->setDocVars($row);
                                if ($db->getDocName() != '' && file_exists('uploads/aboutDocs/' . $db->getDocName())) {
                                    ?>
                                    <a href="uploads/aboutDocs/<?php echo $db->getDocName(); ?>"><?php echo $db->getName(); ?></a>
                                    <?php
                                } else
                                    echo ('<div>' . $db->getName() . '</div>');
                            }
                        }
                        ?>
                    </div>
                    <div class="slicer"></div>
                </div>
                <div id="normDocsDiv">
                    <div class="normDocsDiv">
                        <?php
                        $db = new writeDoc();
                        $link = $db->connect();
                        for ($i = 1; $i < 8; $i++) {
                            $sql = "SELECT * FROM docs WHERE Type LIKE '{$i}' ORDER BY Date ASC";
                            switch ($i) {
                                case 1:
                                    echo '<h4>Federālie likumi</h4>';
                                    break;
                                case 2:
                                    echo '<h4>Valdības dekrēti</h4>';
                                    break;
                                case 3:
                                    echo '<h4>Izglītības ministrijas rīkojumi</h4>';
                                    break;
                                case 4:
                                    echo '<h4>Zinātnes un augstākās izglītības ministrijas rīkojumi</h4>';
                                    break;
                                case 5:
                                    echo '<h4>Izglītības un zinātnes ministrijas vēstules</h4>';
                                    break;
                                case 6:
                                    echo '<h4>Izglītības arodbiedrību vēstules</h4>';
                                    break;
                                case 7:
                                    echo '<h4>Darba un sociālās aizsardzības ministrijas rīkojumi</h4>';
                                    break;
                                case 8:
                                    echo '<h4>Vietējie akti</h4>';
                                    break;
                            }
                            if ($result = mysqli_query($link, $sql)) {
                                foreach ($result as $row) {
                                    $db->setDocVars($row);
                                    ?>
                                    <a href="uploads/aboutDocs/<?php echo $db->getDocName(); ?>"><?php echo $db->getName(); ?></a>
                                    <?php
                                }
                            }
                        }

                        ?>
                    </div>
                    <div class="slicer"></div>
                </div>
            </section>
        </div>
    </section>

    <?php
    include_once('pages/_footer.php');
    ?>

    <script src="https://kit.fontawesome.com/e779950260.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    <script src="js/script.js"></script>
</body>

</html>