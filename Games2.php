<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of games2
 *
 * @author tacch
 */
class Games2 {

    public $games2 = array();

    public function __construct($con) {
        require_once 'players.php';
        require_once 'game2.php';
        $sql = "SELECT * FROM `game2`";
        $ris = $con->query($sql);
        $players = new players($con);

        $i = 0;
        while ($row = $ris->fetch_array()) {
            $this->games2[$i] = new Game2($row["id"], $row["date"], $row["result1"], $row["result2"], $players->getPlayerById($row["player1"]), $players->getPlayerById($row["player2"]));
            $i++;
        }
    }

    public function getGameById($id) {
        $game = new Game2(0, "1111-11-11", $id, $id, new Player(0, "ERRORE"), new Player(0, "ERRORE"));
        for ($x = 0; $x < count($this->games2); $x++) {
            if ($this->games2[$x]->id == $id) {
                return $this->games2[$x];
            }
        }
        return $game;
    }

}
