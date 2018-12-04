<?php

require_once("ConnessioneDb.php");
$db = new ConnessioneDb();

$author = $_POST['author'];
$text = $_POST['text'];


$query = 'INSERT INTO `comment`( `author`, `text`, `likes`) VALUES ("' . $author . '", "' . $text . '", 0)';

//echo $query;

$db->query($query);
?>