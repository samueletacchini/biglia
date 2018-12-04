<?php

require_once("ConnessioneDb.php");
$db = new ConnessioneDb();

$author = $_POST['author'];
$text = $_POST['text'];


$query = 'INSERT INTO `comment`( `author`, `text`, `likes`) VALUES ("' . $author . '", "' . $text . '", 0)';


$db->query($query);




require_once "Comments.php";
$commenti = new Comments($db);
//count($commenti->comments)
$classComm = array();

for ($i = 0; $i < count($commenti->comments); $i++) {
    $classComm[$commenti->comments[$i]->id] = $commenti->comments[$i]->likes;
}

arsort($classComm);
$i = 0;
foreach ($classComm as $key => $value) {
    //  echo "id:".$key . "   -   likes:" . $value;
    //   echo "<br>";
    $comm = $commenti->getComment($key);

    if ($i < 5) {
        echo '<div style="font-size:20px;">';
        echo '<div  class=" panel panel-default col-md-3"><b>#' . ($i + 1) . '</b> <span class="glyphicon glyphicon-thumbs-up" ></span>' . $comm->likes . ' </div>';
        echo '<div  class=" panel panel-default col-md-9">' . $comm->author . '</div>';
        echo '</div>';
        echo '<div  class=" panel panel-body panel-default ">' . $comm->text . '</div>';
    }
    $i++;
}
?>