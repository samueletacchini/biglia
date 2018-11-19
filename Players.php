<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of player
 *
 * @author tacch
 */
class Players {
    public $players;

    public function __construct($con) {

        $sql = "SELECT * from `player`";
        $ris = $con->query($sql);
        $i = 0;
        while ($row = $ris->fetch_array()) {
            $this->players[$i] = new player();
            $this->players[$i]->id = $row["id"];
            $this->players[$i]->nome = $row["nome"];

            $i++;
        }
    }

    public function getPlayerById() {
        $player = new player(0, "");
        for ($x = 0; $x < $this->players->length(); $x++) {
            if ($this->players[$x]->id == $id) {
                
                return $this->players[$x];
            }
        }
        return $player;
    }

//put your code here
}
