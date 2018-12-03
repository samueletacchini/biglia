<?php
	require_once("ConnessioneDb.php");
	$db = new ConnessioneDb();
	
    $date = $_POST['date'];
    $result1 = $_POST['result1'];
    $result2 = $_POST['result2'];
    $defResult1 = $_POST['defResult1'];
    $defResult2 = $_POST['defResult2'];
    $idPlayer1 = $_POST['idPlayer1'];
    $idPlayer2 = $_POST['idPlayer2'];
    
    $query = "INSERT INTO `game2`(`date`, `result1`, `result2`, `defResult1`, `defResult2`, `player1`, `player2`) VALUES ('{$date}', {$result1}, {$result2}, {$defResult1}, {$defResult2}, {$idPlayer1}, {$idPlayer2})";
    
	echo $query;
	
    $db->query($query);
?>