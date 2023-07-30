<?php

class writeDoc
{
    private $aboutDocId = '';
    private $aboutName = '';
    private $aboutDocName = '';
    private $aboutDocType = '';
    private $aboutDocDate = '';
    private $server = "localhost";
    private $login = "umj7a6amoohyc";
    private $password = '8CY6$N27z8Rc@wu';
    private $database = "dbzp76a1bspubb";

    public function setAboutDocId($aboutDocId)
    {
        $this->aboutDocId = trim($aboutDocId);
    }
    public function getDocName()
    {
        return htmlentities($this->aboutDocName);
    }
    public function getName()
    {
        return htmlentities($this->aboutName);
    }
    public function connect()
    {
        $link = mysqli_connect($this->server, $this->login, $this->password, $this->database);
        if ($error = $link->connect_error) {
            die("Connection failed: " . $error);
        }
        return $link;
    }
    public function setDocVars($row)
    {
        if (isset($row['ID']))
            $this->aboutDocId = strip_tags(trim($row['ID']));
        if (isset($row['Name']))
            $this->aboutName = strip_tags(trim($row['Name']));
        if (isset($row['docName']))
            $this->aboutDocName = strip_tags(trim($row['docName']));
        if (isset($row['Type']))
            $this->aboutDocType = strip_tags(trim($row['Type']));
        if (isset($row['Date']))
            $this->aboutDocDate = strip_tags(trim($row['Date']));
    }
    public function writeQuery($link)
    {
        $sql = "INSERT INTO docs 
        (Name, docName, Type, Date)
        VALUES ('{$this->aboutName}','{$this->aboutDocName}','{$this->aboutDocType}','{$this->aboutDocDate}')";

        if (mysqli_query($link, $sql)) {
            unset($_POST);
            header('Location: ../admin.php');
        } else
            echo "Ошибка: " . $link->error;
    }
    public function deleteDoc($link, $key)
    {
        $sql = "DELETE FROM `docs` WHERE Name = '{$key}'";
        $sqlFile = "SELECT docName FROM `docs` WHERE Name = '{$key}'";
        if ($result = mysqli_query($link, $sqlFile)) {
            foreach ($result as $row) {
                if ($row['docName'] != '' && !unlink('../uploads/aboutDocs/' . $row['docName']))
                    throw new \RuntimeException("Failed to unlink {$row}: " . var_export(error_get_last(), true));
            }
            if (mysqli_query($link, $sql)) {
                header('Location: ../admin.php');
            }
        } else
            echo "Ошибка: " . $link->error;
    }
}

if (isset($_POST['Name'])) {
    $db = new writeDoc();
    $uploaddir = '../uploads/aboutDocs/';
    $_FILES['docName']['name'] = '1' . $_FILES['docName']['name'];
    $uploadfile = $uploaddir . basename($_FILES['docName']['name']);

    echo '<pre>';
    if (!move_uploaded_file($_FILES['docName']['tmp_name'], $uploadfile)) {
        echo "File not uploaded\n";
    }

    $_POST['docName'] = $_FILES['docName']['name'];

    $db->setDocVars($_POST);

    $link = $db->connect();

    $db->writeQuery($link);
}

if (isset($_POST['DocDelete'])) {
    $db = new writeDoc();
    $link = $db->connect();
    $db->deleteDoc($link, $_POST['DocDelete']);
}
