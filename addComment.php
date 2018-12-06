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

        echo '<div><div style = "font-size:20px;"><table class = "table">';
        echo '<tr><td  class = " divlike panel panel-default col-md-2"><b>#' . ($i + 1) . '</b></td>';
        if (isset($_SESSION["like{$comm->id}"]) && $_SESSION["like{$comm->id}"] == 1) {
            echo '<td  class = "divlike panel panel-default  col-md-2"><a id="' . $comm->id . '" onclick="addLike(' . $comm->id . ')"><span style="color:blue; margin-top: px;" class = "  glyphicon glyphicon-thumbs-up" ></span></a></td>';
        } else {
            echo '<td  class = "divlike panel panel-default  col-md-2"><a id="' . $comm->id . '" onclick="addLike(' . $comm->id . ')"><span style="color:#606770; margin-top: px;" class = "  glyphicon glyphicon-thumbs-up" ></span></a></td>';
        }
        echo '<td class = "divlike panel panel-default col-md-2">' . $comm->likes . '</td>';
        echo '<td class = "divlike panel panel-default col-md-6">' . $comm->author . '</td></tr>';
        echo '<tr><td class = " panel panel-body panel-default " colspan="4">' . $comm->text . '</td></tr>';
        echo '</table></div></div>';
    }
    $i++;
}
?>


