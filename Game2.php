<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of game2
 *
 * @author tacch
 */
class Game2 {

    public $id;
    public $date;
    public $result1;
    public $result2;
    public $player1;
    public $player2;

    function __construct($id, $date, $result1, $result2, $player1, $player2) {
        $this->id = $id;
        $this->date = $date;
        $this->result1 = $result1;
        $this->result2 = $result2;
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    //put your code here
}
