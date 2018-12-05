<?php

session_start();
require_once "Comments.php";
require_once("ConnessioneDb.php");
$db = new ConnessioneDb();
$commenti = new Comments($db);



if (!isset($_SESSION["like{$_POST["id"]}"])) {
    //like su quel post non esiste ancora
    $_SESSION["like{$_POST["id"]}"] = 1;
    $sql = "UPDATE `comment` SET `likes`= " . ($commenti->getComment($_POST["id"])->likes + 1) . " WHERE `id` = {$_POST["id"]}";
    $ris = $db->query($sql);
} else if ($_SESSION["like{$_POST["id"]}"] == 1) {
    //like su quel post esiste gia quindi non posso matterlo ancora
    //tolgo il like
    $_SESSION["like{$_POST["id"]}"] = 0;
    $sql = "UPDATE `comment` SET `likes`= " . ($commenti->getComment($_POST["id"])->likes - 1) . " WHERE `id` = {$_POST["id"]}";
    $ris = $db->query($sql);
} else {
    //in qualche modo $session[like] esiste gia di quel post ma non è uno quindi ancora non la hesso like
    $_SESSION["like{$_POST["id"]}"] = 1;
    $sql = "UPDATE `comment` SET `likes`= " . ($commenti->getComment($_POST["id"])->likes + 1) . " WHERE `id` = {$_POST["id"]}";
    $ris = $db->query($sql);
}


$commenti = null;
$commenti = new Comments($db);

$classComm = array();

for ($i = 0; $i < count($commenti->comments); $i++) {
    //* (($dim - 1 - $i) * 0.1)
    $classComm[$commenti->comments[$i]->id] = $commenti->comments[$i]->likes;
}

arsort($classComm);
$i = 0;
foreach ($classComm as $key => $value) {

    if ($i < 5) {
        $comm = $commenti->getComment($key);

        echo '<div style = "font-size:20px;">';
        echo '<div class = "col-md-3 panel panel-default">';
        echo '<div class = "col-md-4" style = "text-align: left;">';
        echo '<b>#' . ($i + 1) . '</b>';
        echo '</div><div  class = "col-md-4">';

        if (isset($_SESSION["like{$comm->id}"]) && $_SESSION["like{$comm->id}"] == 1) {
            echo '<a id="' . $comm->id . '" onclick="addLike(' . $comm->id . ')"><span style="color:blue    " class = "glyphicon glyphicon-thumbs-up" ></span></a></div>';
        } else {
            echo '<a id="' . $comm->id . '" onclick="addLike(' . $comm->id . ')"><span style="color:#606770" class = "  glyphicon glyphicon-thumbs-up" ></span></a></div>';
        }

        echo '<div class = "col-md-4">' . $comm->likes . '</div></div>';
        echo '<div class = " panel panel-default col-md-9">' . $comm->author . '</div></div>';
        echo '<div class = " panel panel-body panel-default ">' . $comm->text . '</div>';
    }
    $i++;
}
?>