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
    <title>Kurss</title>
</head>

<body>

    <?php

    include_once('DB/DB.php');

    $db = new DB;

    $link = $db->connect();

    $sql = 'SELECT * FROM box_info';

    if ($result = mysqli_query($link, $sql))
        foreach ($result as $row) {
            if ($row['ID'] != $_GET['id'])
                continue;
            $db = new DB;
            $db->setVars($row);
        }
    ?>

    <section class="mainPage">
        <?php
        include_once('pages/_header.php');
        ?>
        <div class="leftSide">
            <a href="/">
                <img src="icons/logo.png" alt="main logo">
            </a>
        </div>
        <div class="rightSide plan">
            <h1 class="planName">
                <?php echo $db->getName(); ?>
            </h1>
            <div class="planType">
                <?php
                if ($db->getType() == 1) {
                    echo 'Profesionālā pārkvalifikācija';
                } else if ($db->getType() == 2) {
                    echo 'Apmācība';
                } else if ($db->getType() == 3) {
                    echo 'Profesionālā izglītība';
                } else {
                    echo ' ';
                }
                ?>
            </div>
            <div class="planBox">
                <div class="planBoxText">
                    <div class="planGoal"><b>Programmas galvenais mērķis ir </b>
                        <?php
                        $goal = explode('.', $db->getGoal());
                        echo $goal[0] . '.';
                        for ($i = 1; $i < sizeof($goal); $i++) {
                            if ($goal[$i] != '')
                                echo ('<p>' . $goal[$i] . '.</p>');
                        }

                        ?>
                    </div>
                </div>
                <div class="planBoxImg">
                    <button type="button" class="emptyButton" data-toggle="modal" data-target="#exampleModal">
                        <img src="img/ex-udo-o-<?php
                        if ($db->getType() == 1) {
                            echo 'pp';
                        } else if ($db->getType() == 2) {
                            echo 'pk';
                        } else if ($db->getType() == 3) {
                            echo 'po';
                        }
                        ?>.jpg" alt="Пример выдаваемого документа"></button>
                    <div>Izsniegtā dokumenta piemērs</div>
                </div>
                <div class="planBoxImgPhone">
                    <img src="img/ex-udo-o-<?php
                    if ($db->getType() == 1) {
                        echo 'pp';
                    } else if ($db->getType() == 2) {
                        echo 'pk';
                    } else if ($db->getType() == 3) {
                        echo 'po';
                    }
                    ?>.jpg" alt="Пример выдаваемого документа">
                    <div>Izsniegtā dokumenta piemērs</div>
                </div>
            </div>
            <div class="planCategory"><b>Mērķauditorijas kategorija: </b>
                <?php echo $db->getCategory(); ?>
            </div>
            <div class="planForm"><b>Studiju forma: </b>
                <?php echo $db->getForm(); ?>
            </div>
            <div class="planCalendar"><b>Kalendāra mācību grafiks: </b>
                <?php echo $db->getCalendar(); ?>
            </div>
            <div class="planHC"><b>No tiem: </b>
                <?php echo $db->getHours_Cal(); ?>
            </div>
            <div class="planHaD"><b>Stundas dienā: </b>
                <?php echo $db->getHours_a_day(); ?>
            </div>
            <div class="planDaW"><b>Dienas nedēļā: </b>
                <?php echo $db->getDays_a_week(); ?>
            </div>
            <div class="planDuration"><b>Kopējais programmas īstenošanas ilgums:
                </b>
                <?php echo $db->getDuration(); ?>
            </div>
            <div class="planResult">
                <?php echo $db->getResult(); ?>
            </div>
            <div class="planInfo">
                <?php echo $db->getInfo(); ?>
            </div>
            <?php
            if ($annex = $db->getDoc()) {
                echo '<a href="uploads/planDocs/' . $annex . '" class="btn btn-primary btn-annexes">Учебный план</a>';
            }
            ?>
    </section>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Izsniegtā dokumenta piemērs</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="img/ex-udo-o-<?php
                    if ($db->getType() == 1) {
                        echo 'pp';
                    } else if ($db->getType() == 2) {
                        echo 'pk';
                    } else if ($db->getType() == 3) {
                        echo 'po';
                    }
                    ?>.jpg" alt="Izsniegtā dokumenta piemērs">
                </div>
            </div>
        </div>
    </div>


    <?php
    $db = null;
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
    </script>
</body>

</html>