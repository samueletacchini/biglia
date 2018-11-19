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

    public $Games2 = array();

    public function __construct($con) {

        $sql = "SELECT * FROM `game2`";
        $ris = $con->query($sql);
        $players = new players();

        $i = 0;
        while ($row = $ris->fetch_array()) {
            $this->Games2[$i] = new Game2($row["id"], $row["date"], $row["result1"], $row["result2"], $players->getPlayerById($row["player1"]), $players->getPlayerById($row["player2"]));
            $i++;
        }
    }

    public function getGameById($id) {
        $game = "ERRORE";
        for ($x = 0; $x < $this->Games2->length(); $x++) {
            if ($this->Games2[$x]->id == $id) {
                return $this->Games2[$x];
            }
        }
        return $player;
    }

}
