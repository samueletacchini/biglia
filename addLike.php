<?php

require_once "Comments.php";
require_once("ConnessioneDb.php");


$db = new ConnessioneDb();
$commenti = new Comments($db);
$sql = "UPDATE `comment` SET `likes`= " . ($commenti->getComment($_POST["id"])->likes + 1) . " WHERE `id` = {$_POST["id"]}";
$ris = $db->query($sql);

