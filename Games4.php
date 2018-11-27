<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of games4
 *
 * @author tacch
 */
class Games4 {

    public $games4;

    public function __construct($con) {
        require_once 'players.php';
        require_once 'game4.php';
        $sql = "SELECT * FROM `game4`";
        $ris = $con->query($sql);
        $players = new players($con);
        $i = 0;
        while ($row = $ris->fetch_array()) {
            $this->games4[$i] = new game4($row["id"], $row["date"], $row["result1"], $row["result2"], $players->getPlayerById($row["player1"]), $players->getPlayerById($row["player2"]), $players->getPlayerById($row["player3"]), $players->getPlayerById($row["player4"]));
            $i++;
        }
    }

    public function getGameById($id) {
        $game = "ERRORE";
        for ($x = 0; $x < $this->games4->length(); $x++) {
            if ($this->games4[$x]->id == $id) {

                return $this->games4[$x];
            }
        }
        return $game;
    }

}
