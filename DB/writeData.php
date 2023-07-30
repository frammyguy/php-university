<?php
include_once('DB.php');

if (!isset($_POST['Name'])) {
    header('Location: ../admin.php');
}

$db = new DB();

$uploaddir = '../icons/box/';
$_FILES['Picture']['name'] = '1' . $_FILES['Picture']['name'];
$uploadfile = $uploaddir . basename($_FILES['Picture']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['Picture']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "File not uploaded\n";
}

$uploaddir = '../uploads/planDocs/';
$_FILES['Doc']['name'] = '1' . $_FILES['Doc']['name'];
$uploadfile = $uploaddir . basename($_FILES['Doc']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['Doc']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "File not uploaded\n";
}

$_POST['Picture'] = $_FILES['Picture']['name'];

$db->setVars($_POST);

$_POST['Doc'] = $_FILES['Doc']['name'];
$db->setDoc($_POST['Doc']);

$link = $db->connect();

$db->writeQuery($link);

header('Location: ../admin.php');