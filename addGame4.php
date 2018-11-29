<?php
    $date = $_POST['date'];
    $result1 = $_POST['result1'];
    $result2 = $_POST['result2'];
    $defResult1 = $_POST['defResult1'];
    $defResult2 = $_POST['defResult2'];
    $idPlayer1 = $_POST['idPlayer1'];
    $idPlayer2 = $_POST['idPlayer2'];
    $idPlayer3 = $_POST['idPlayer3'];
    $idPlayer4 = $_POST['idPlayer4'];
    
    $db = new ConnessioneDb();
    
    $query = "INSERT INTO `game4`(`id`, `date`, `result1`, `result2`, `defResult1`, `defResult2`, `player1`, `player2`, `player3`, `player4`) VALUES (, '".$date."', ".$result1.", ".$result2.", ".$defResult1.", ".$defResult2.", ".$player1.", ".$player2.", ".$player3.", ".$player4.")";
    
    $db->query($query);
?>