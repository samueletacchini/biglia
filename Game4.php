<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of game4
 *
 * @author tacch
 */
class Game4 {

    public $id;
    public $date;
    public $result1;
    public $result2;
    public $player1; //ATTACCANTE1
    public $player2; //DIFENSORE1
    public $player3; //ATTACCANTE2
    public $player4; //DIFENSORE1

    function __construct($id, $date, $result1, $result2, $player1, $player2, $player3, $player4) {
        $this->id = $id;
        $this->date = $date;
        $this->result1 = $result1;
        $this->result2 = $result2;
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->player3 = $player3;
        $this->player4 = $player4;
    }

}
