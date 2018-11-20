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
class Player {

    public $id;
    public $name;

    public function __construct($id, $nome) {
        $this->id = $id;
        $this->name = $nome;
    }

    //put your code here
}
