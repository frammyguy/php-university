<?php

class DB
{
    private $id = 0;
    private $type = 0;
    private $name = '';
    private $goal = '';
    private $category = '';
    private $form = '';
    private $calendar = 0;
    private $hours_cal = '';
    private $hours_a_day = 0;
    private $days_a_week = 0;
    private $duration = '';
    private $result = '';
    private $info = '';
    private $historyID = 0;
    private $historyTime = '';
    private $historyResult = '';
    private $filter = '';
    private $picture = '';
    private $doc = '';

    private $server = "localhost";
    private $login = "umj7a6amoohyc";
    private $password = '8CY6$N27z8Rc@wu';
    private $database = "dbzp76a1bspubb";

    
    public function setDoc($doc)
    {
        $this->doc = trim($doc);
    }

    public function getId()
    {
        return htmlentities($this->id);
    }
    public function getHistoryID()
    {
        return htmlentities($this->historyID);
    }
    public function getHistoryTime()
    {
        return htmlentities($this->historyTime);
    }
    public function getHistoryResult()
    {
        return htmlentities($this->historyResult);
    }
    public function getType()
    {
        return htmlentities($this->type);
    }
    public function getName()
    {
        return htmlentities($this->name);
    }
    public function getGoal()
    {
        return htmlentities($this->goal);
    }
    public function getCategory()
    {
        return htmlentities($this->category);
    }
    public function getForm()
    {
        return htmlentities($this->form);
    }
    public function getCalendar()
    {
        return htmlentities($this->calendar);
    }
    public function getHours_Cal()
    {
        return htmlentities($this->hours_cal);
    }
    public function getHours_a_day()
    {
        return htmlentities($this->hours_a_day);
    }
    public function getDays_a_week()
    {
        return htmlentities($this->days_a_week);
    }
    public function getDuration()
    {
        return htmlentities($this->duration);
    }
    public function getResult()
    {
        return htmlentities($this->result);
    }
    public function getInfo()
    {
        return htmlentities($this->info);
    }
    public function getFilter()
    {
        return htmlentities($this->filter);
    }
    public function getPicture()
    {
        return htmlentities($this->picture);
    }
    public function getDoc()
    {
        return htmlentities($this->doc);
    }

    public function connect()
    {
        $link = mysqli_connect($this->server, $this->login, $this->password, $this->database);
        if ($error = $link->connect_error) {
            die("Connection failed: " . $error);
        }
        return $link;
    }

    public function writeQuery($link)
    {
        $sql = "INSERT INTO box_info 
        (type, name, goal, category, form, calendar, hours_cal, hours_a_day, days_a_week, duration, result, info, filter, picture, doc)
        VALUES ('{$this->type}','{$this->name}','{$this->goal}','{$this->category}','{$this->form}','{$this->calendar}','{$this->hours_cal}','{$this->hours_a_day}','{$this->days_a_week}','{$this->duration}','{$this->result}','{$this->info}','{$this->filter}','{$this->picture}','{$this->doc}')";

        if (mysqli_query($link, $sql))
            header('Location: ../admin.php');
        else
            echo "Error: " . $link->error;
    }

    public function setVars($row)
    {
        if (isset($row['ID']))
            $this->id = strip_tags(trim($row['ID']));
        if (isset($row['Type']))
            $this->type = strip_tags(trim($row['Type']));
        if (isset($row['Name']))
            $this->name = strip_tags(trim($row['Name']));
        if (isset($row['Goal']))
            $this->goal = strip_tags(trim($row['Goal']));
        if (isset($row['Category']))
            $this->category = strip_tags(trim($row['Category']));
        if (isset($row['Form']))
            $this->form = strip_tags(trim($row['Form']));
        if (isset($row['Calendar']))
            $this->calendar = strip_tags(trim($row['Calendar']));
        if (isset($row['Hours_Cal']))
            $this->hours_cal = strip_tags(trim($row['Hours_Cal']));
        if (isset($row['Hours_a_day']))
            $this->hours_a_day = strip_tags(trim($row['Hours_a_day']));
        if (isset($row['Days_a_week']))
            $this->days_a_week = strip_tags(trim($row['Days_a_week']));
        if (isset($row['Duration']))
            $this->duration = strip_tags(trim($row['Duration']));
        if (isset($row['Result']))
            $this->result = strip_tags(trim($row['Result']));
        if (isset($row['Info']))
            $this->info = strip_tags(trim($row['Info']));
        if (isset($row['Filter']))
            $this->filter = strip_tags(trim($row['Filter']));
        if (isset($row['Picture']))
            $this->picture = strip_tags(trim($row['Picture']));
        if (isset($row['Doc']))
            $this->doc = strip_tags(trim($row['Doc']));
    }

    public function setHistory($id, $time, $result)
    {
        $this->historyID = strip_tags(trim($id));
        $this->historyTime = strip_tags(trim($time));
        $this->historyResult = strip_tags(trim($result));
    }
    public function writeHistory($link)
    {
        $sql = "INSERT INTO `search_history` (Time, Result) VALUES ('{$this->historyTime}','{$this->historyResult}')";

        if (!mysqli_query($link, $sql))
            echo "Error: " . $link->error;
    }

    public function deleteRow($link, $key)
    {
        $sql = "DELETE FROM `box_info` WHERE Name = '{$key}'";
        $sqlFile = "SELECT Picture FROM `box_info` WHERE Name = '{$key}'";
        if ($result = mysqli_query($link, $sqlFile)) {
            foreach ($result as $row) {
                if (!unlink('../icons/box/' . $row['Picture']))
                    throw new \RuntimeException("Failed to unlink {$row}: " . var_export(error_get_last(), true));
            }
            if (mysqli_query($link, $sql)) {
                header('Location: ../admin.php');
            }
        } else
            echo "Error: " . $link->error;
    }
    public function searchTool($filter)
    {
        if (stripos($this->type, $filter))
            return true;
        if (stripos($this->name, $filter))
            return true;
        if (stripos($this->goal, $filter))
            return true;
        if (stripos($this->category, $filter))
            return true;
        if (stripos($this->calendar, $filter))
            return true;
        if (stripos($this->hours_cal, $filter))
            return true;
        if (stripos($this->hours_a_day, $filter))
            return true;
        if (stripos($this->days_a_week, $filter))
            return true;
        if (stripos($this->duration, $filter))
            return true;
        if (stripos($this->result, $filter))
            return true;
        if (stripos($this->info, $filter))
            return true;
        if (stripos($this->filter, $filter))
            return true;
        return false;
    }
}