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
    <title>Admin</title>
</head>

<body class="adminBody">

    <a href="/">
        <img class="adminImg" src="icons/logo.png" alt="main logo">
    </a>
    <h2 class="adminTitle">Administratora konts</h2>

    <div class="btnAdminBox">
        <button id="adminAddBtn" class="btn btn-dark">
            Izveidot programmu
        </button>
        <button id="adminRemoveBtn" class="btn btn-dark">
            Dzēst programmu
        </button>
        <button id="HistoryBtn" class="btn btn-dark">
            Meklēšanas vēsture
        </button>
        <button id="AddDocBtn" class="btn btn-dark">
            Pievienot dokumentu
        </button>
        <button id="RemoveDocBtn" class="btn btn-dark">
            Dzēst dokumentu
        </button>
    </div>

    <?php
    include_once('DB/DB.php');
    ?>

    <div id="adminForm">
        <form class="adminForm" action="DB/writeData.php" method="POST" enctype="multipart/form-data">
            <label for="type">Izvēlieties tipu*</label>
            <select name="Type" id="type">
                <option id="targetOption" value="0" hidden selected></option>
                <option value="1">Profesionālā pārkvalifikācija</option>
                <option value="2">Apmācība</option>
                <option value="3">Profesionālā izglītība</option>
            </select>

            <label for="Name">Ievadiet programmas nosaukumu*</label>
            <input name="Name" type="text" id="name" placeholder="Введите название">

            <label for="goal">Ievadiet programmas galveno mērķi*</label>
            <textarea name="Goal" id="goal" cols="30" rows="5"></textarea>

            <label for="category">Ievadiet klausītāju kategoriju*</label>
            <input name="Category" type="text" id="category" placeholder="Категория">

            <label for="form">Ievadiet studiju formu*</label>
            <input name="Form" type="text" id="form" placeholder="Форма обучения">

            <label for="calendar">Ievadiet kalendāra mācību grafiku*</label>
            <input name="Calendar" type="text" id="calendar" placeholder="Количество часов">

            <label for="hours_cal">No tiem</label>
            <input name="Hours_Cal" type="text" id="hours_cal" placeholder="Введите число">

            <label for="hours_a_day">Ievadiet stundu skaitu dienā</label>
            <input name="Hours_a_day" type="text" id="hours_a_day" placeholder="Введите количество часов">

            <label for="days_a_week">Ievadiet dienu skaitu nedēļā</label>
            <input name="Days_a_week" type="text" id="days_a_week" placeholder="Введите количество дней">

            <label for="duration">Ievadiet kopējo ilgumu*</label>
            <input name="Duration" type="text" id="duration" placeholder="Введите продолжительность">

            <label for="result">Ievadiet mācību rezultātu*</label>
            <input name="Result" type="text" id="result" placeholder="Введите результат">

            <label for="info">Ievadiet papildu informāciju (ja pieejama)</label>
            <textarea name="Info" id="info" cols="30" rows="5"></textarea>

            <label for="filter">Ievadiet filtru (atdalot ar komatiem)</label>
            <input name="Filter" type="text" id="filter" placeholder="Введите фильтр">

            <label for="picture">Augšupielādējiet attēlu (ne vairāk kā 2 MB)</label>
            <input name="Picture" type="file" accept=".jpg, .png, .gif, .jpeg" id="picture">

            <label for="doc">Augšupielādējiet failu (ne vairāk kā 2 MB)</label>
            <input name="Doc" type="file" accept=".pdf" id="doc">

            <div class="adminButtons">
                <button class="btn btn-success" type="submit">Izveidot</button>
            </div>

        </form>

    </div>
    <div id="adminRemoveForm">
        <form class="adminRemoveForm" action="DB/removeData.php" method="POST">
            <label for="numberDelete">Ievadiet tās programmas nosaukumu, kuru vēlaties noņemt</label>
            <input name="numberDelete" id="numberDelete" type="text">
            <button type="submit" class="btn btn-danger adminRemoveButton">Dzēst</button>
        </form>
    </div>
    <div id="HistoryForm">
        <table class="historyTable">
            <?php
            $db = new DB;

            $link = $db->connect();

            $sql = 'SELECT * FROM search_history ORDER BY ID DESC';

            if ($result = mysqli_query($link, $sql))
                foreach ($result as $row) {
                    $db = new DB;
                    $db->setHistory($row['ID'], $row['Time'], $row['Result'], );
                    ?>
                    <tr>
                        <td>
                            <?php echo $db->getHistoryID(); ?>
                        </td>
                        <td>
                            <?php echo $db->getHistoryTime(); ?>
                        </td>
                        <td class="removeResult">
                            <?php echo $db->getHistoryResult(); ?>
                            <form action="DB/removeHistory.php" method="POST">
                                <input id="deleteId" name="deleteId" type="text" value="<?php echo $db->getHistoryID(); ?>"
                                    hidden>
                                <button class="btn btn-danger" type="submit">
                                    Dzēst
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <form action="DB/removeHistory.php" method="POST">
            <input id="deleteAll" name="deleteAll" type="text" value="1" hidden>
            <button class="btn btn-danger" type="submit">
                Iztīrīt visu
            </button>
        </form>
    </div>
    <div id="AddDocForm">
        <form class="adminRemoveForm" action="DB/writeDoc.php" method="POST" enctype="multipart/form-data">
            <label for="Name">Ievadiet dokumenta nosaukumu</label>
            <input name="Name" id="Name" type="text">
            <label for="Type">Izvēlieties tipu</label>
            <select name="Type" id="Type">
                <option value="0">Paslēpts atlasīts</option>
                <option value="1">Federālie likumi</option>
                <option value="2">Valdības dekrēti</option>
                <option value="3">Izglītības ministrijas rīkojumi</option>
                <option value="4">Zinātnes un augstākās izglītības ministrijas rīkojumi</option>
                <option value="5">Izglītības un zinātnes ministrijas vēstules</option>
                <option value="6">Vēstules no Izglītības arodbiedrības</option>
                <option value="7">Darba un sociālās aizsardzības ministrijas rīkojumi</option>
                <option value="8">Vietējās darbības</option>
                <option value="9">Iesniedzamo dokumentu saraksts</option>
            </select>
            <label for="Date">Izvēlieties datumu (lai kārtotu)</label>
            <input name="Date" id="Date" type="date">
            <label for="docName">Lejupielādējiet failuл</label>
            <input name="docName" type="file" accept=".pdf, .doc, .docx" id="docName">
            <button type="submit" class="btn btn-success adminRemoveButton">Lejupielādēt</button>
        </form>
    </div>
    <div id="RemoveDocForm">
        <form class="adminRemoveForm" action="DB/writeDoc.php" method="POST" enctype="multipart/form-data">
            <label for="DocDelete">Ievadiet tā dokumenta nosaukumu, kuru vēlaties dzēst</label>
            <input name="DocDelete" id="DocDelete" type="text">
            <button type="submit" class="btn btn-danger adminRemoveButton">Dzēst</button>
        </form>
    </div>

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
    <script src="js/admin.js"></script>
</body>

</html>