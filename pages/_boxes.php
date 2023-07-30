<section class="info">
    <div class="banner">
        <img src="img/banner.jpg" alt="banner">
    </div>
    <div id="box" class="info-title">
        <div class="info-buttons w-100">
            <button id="btn-pk" class="btn btn-light sort pk">
                Apmācība
            </button=>
            <button id="btn-pp" class="btn btn-light sort pp">
                Profesionālā pārkvalifikācija
            </button>
            <button id="btn-po" class="btn btn-light sort po">
                Profesionālā izglītība
            </button>
            <br id="filterP" class="11 22">
            <button id="btn-sort" class="btn btn-light sort sorting">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-filter" viewBox="0 0 16 16">
                    <path
                        d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                </svg>
                <br id="filterSort" class="ff gg">
            </button>
        </div>
        <?php
        if (isset($_GET['search']))
            $search = $_GET['search'];
        $db = new DB;
        $link = $db->connect();
        if (isset($_GET['search']) && $_GET['search'] != '') {
            $f = $_GET['search'];
            $db->setHistory(0, date('d-m-Y, H:i'), $_GET['search']);
            $db->writeHistory($link);
            $_GET['search'] = '';
        }
        if (isset($_GET['sort']) && $_GET['sort'] != '') {
            $s = $_GET['sort'];
            $_GET['sort'] = '';
        }
        $SortSql = 'SELECT Filter FROM box_info';
        $sortArr = [];
        if ($result = mysqli_query($link, $SortSql)) {
            foreach ($result as $row) {
                $sortRow = '';
                if ($row != '')
                    $sortRow = explode(',', $row['Filter']);
                foreach ($sortRow as $sortWord) {
                    $sortWord = trim($sortWord, ' ');
                    if (!in_array($sortWord, $sortArr) && $sortWord != '')
                        array_push($sortArr, $sortWord);
                }
            }
        }
        if (isset($sortArr)) {
            ?>
            <form action="index.php" method="GET" id="sortBox" class="info-sort-box" <?php if (!isset($s))
                echo "style='display: none'"; ?>>
                <input name="sort" type="text" id="sortInput" class="d-none">
                <?php
                if ($sortArr != [])
                    foreach ($sortArr as $sortBtns) {
                        ?>
                        <button type="button" class="btn btn<?php

                        if (isset($s)) {
                            if ($s != $sortBtns)
                                echo '-outline';
                        } else
                            echo '-outline';

                        ?>-light sortBtn"><?php echo $sortBtns ?></button>
                        <?php
                    }
                ?>
                </button>
                <button id="sortBtnSubmit" type="submit" class="d-none"></button>
            </form>
        <?php } ?>
    </div>
    <form action="plan.php" method="GET" class="box-box row">
        <?php
        $db = new DB;

        $link = $db->connect();
        $sql = 'SELECT * FROM box_info';
        if (isset($f))
            $sql .= " WHERE Name LIKE '%{$f}%' OR Goal LIKE '%{$f}%' OR Category LIKE '%{$f}%' OR Form LIKE '%{$f}%' OR Result LIKE '%{$f}%' OR Info LIKE '%{$f}%' OR Filter LIKE '%{$f}%'";
        if (isset($s))
            $sql .= " WHERE Filter LIKE '%{$s}%'";


        $emptyCheck = false;
        if ($result = mysqli_query($link, $sql)) {
            $count = 0;
            $counthidden = 0;
            foreach ($result as $row) {
                $emptyCheck = true;
                $db = new DB;
                $db->setVars($row);
                $type = $db->getType();
                ?>
                <button name="id" value="<?php echo $db->getId(); ?>" type="submit" class="box col-md-5 <?php

                   if ($db->getType() == 1) {
                       echo 'box-pp';
                   } else if ($db->getType() == 2) {
                       echo 'box-pk';
                   } else if ($db->getType() == 3) {
                       echo 'box-po';
                   } else {
                       echo 'box-null';
                   }

                   ?>" <?php if ($counthidden > 5)
                       echo 'hidden'; ?>>
                    <div class="box-title">
                        <h1>
                            <?php echo $db->getName(); ?>
                        </h1>
                        <?php
                        if ($db->getPicture()) {
                            $pic = $db->getPicture();
                            echo "<img src='icons/box/" . $pic . "' alt='Bilde'>";
                            $pic = '';
                        }
                        ?>
                    </div>
                    <h5><b>Programmas galvenais mērķis - </b>
                        <?php

                        $goal = explode('.', $db->getGoal());
                        echo $goal[0] . '.';
                        $goal = [];

                        ?>
                    </h5>
                    <h3>
                        <?php echo $db->getDuration(); ?>
                    </h3>
                    <br name="filterClass" class="<?php
                    $filter = explode(',', $db->getFilter());
                    foreach ($filter as $var) {
                        echo trim($var) . ' ';
                    }
                    ?>">
                </button>

                <?php
                $db = null;
                $counthidden++;
            }
            ?>

        </form>
        <?php
        if ($counthidden > 5) {
            ?>
            <button id="loadMore" class="btn btn-dark">
                Ielādēt vairāk
            </button>
            <?php
        }
        ?>
        <?php
        }
        if (!$emptyCheck) {
            ?>
        <div class="emptyCheck">Nav tāda virziena</div>
        <?php
        }
        ?>


    <div class="help">
        <h2 class="help-text">Mēs palīdzēsim jums izvēlēties programmu</h2>
        <div class="help-page">
            <div class="help-img">
                <img src="icons/kitty.png" alt="картинка">
            </div>
            <div>
                <script data-b24-form="inline/33/398w8c" data-skip-moving="true">
                    (function (w, d, u) {
                        var s = d.createElement('script');
                        s.async = true;
                        s.src = u + '?' + (Date.now() / 180000 | 0);
                        var h = d.getElementsByTagName('script')[0];
                        h.parentNode.insertBefore(s, h);
                    })(window, document, 'https://cdn-ru.bitrix24.ru/b388131/crm/form/loader_33.js');
                </script>
            </div>
        </div>
    </div>

</section>