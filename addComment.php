<?php
session_start();
require_once("ConnessioneDb.php");
$db = new ConnessioneDb();

$author = $_POST['author'];
$text = $_POST['text'];

$query = 'INSERT INTO `comment`( `author`, `text`, `likes`) VALUES ("' . $author . '", "' . $text . '", 0)';

$db->query($query);




require_once "Comments.php";
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


