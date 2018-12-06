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
        require_once('Player.php');

        $sql = "SELECT * from `player`";
        $ris = $con->query($sql);
        $i = 0;
        while ($row = $ris->fetch_array()) {
            $this->players[$i] = new player($row["id"], $row["nome"]);

            $i++;
        }
    }
    public function getPlayerById($id) {
        $player = new player(0, "");
        for ($x = 0; $x < count($this->players); $x++) {
            if ($this->players[$x]->id == $id) {
                return $this->players[$x];
            }
        }
        return $player;
    }
    
     public function getPlayerByname($id) {
        $player = new player(0, "");
        for ($x = 0; $x < count($this->players); $x++) {
            if ($this->players[$x]->name == $id) {
                return $this->players[$x];
            }
        }
        return $player;
    }

//put your code here
}
